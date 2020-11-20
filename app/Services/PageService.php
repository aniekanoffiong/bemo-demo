<?php

namespace App\Services;

use App\Models\SiteConfig;
use App\Models\SiteContent;
use Parsedown;

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

}