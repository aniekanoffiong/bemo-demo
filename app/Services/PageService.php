<?php

namespace App\Services;

use App\Mail\ContactMessageNotice;
use App\Models\SiteContent;
use App\Models\SiteConfig;
use Parsedown;
use Storage;
use Mail;

class PageService
{

    private $parsedown;

    public function __construct(Parsedown $parsedown)
    {
        $this->parsedown = $parsedown;
    }

    public function get_page($page_slug)
    {
        $config = SiteConfig::first();
        if ($config) {
            $content = SiteContent::where('page_slug', $page_slug)->first();
            $details = [
                'config' => $config,
                'page' => $content,
                'content' => $this->parsedown->text($content->content)
            ];
            return $details;
        }
        return null;
    }

    public function get_page_data($page_slug)
    {
        $content = SiteContent::where('page_slug', $page_slug)->first();
        if ($content) {
            $details = array_merge(
                $content->toArray(),
                ['content' => $this->parsedown->text($content->content)]);
            return $details;
        }
        return null;
    }

    public function update_page_data($request)
    {
        if ($request->hasFile('featured')) {
            $file_url = '/storage/' . Storage::disk('public')->putFile('images', $request->file('featured')); 
        }
        $content = SiteContent::where('page_slug', $request->type)->first();
        if ($content) {
            $content->title = $request->title ?? $content->title;
            $content->featured_image = $file_url ?? $content->featured_image;
            $content->description = $request->description ?? $content->description;
            $content->content = $request->content ?? $content->content;
            $content->search_index = $request->search_index ?? $content->search_index;
            return $content->save();
        }
        return false;
    }

    public function update_config($request)
    {
        $config = SiteConfig::first();
        if ($config) {
            $config->contact_email = $request->contact_email ?? $config->contact_email;
            $config->google_analytics = $request->google_analytics ?? $config->google_analytics;
            $config->facebook_ad = $request->facebook_ad ?? $config->facebook_ad;
            return $config->save();
        }
        return false;
    }

    public function send_mail($request)
    {
        $config = SiteConfig::first();
        if ($config && $config->contact_email) {
            $email = $config->contact_email;
        }
        if ($email) {
            Mail::to($email)->send(new ContactMessageNotice($request));
        }
    }

}