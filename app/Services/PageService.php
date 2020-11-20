<?php

namespace App\Services;

use App\Models\SiteConfig;
use App\Models\SiteContent;

class PageService
{

    public function get_page($page_slug)
    {
        $config = SiteConfig::where('page_slug', $page_slug)->first();
        if ($config) {
            $content = SiteContent::where('page_slug', $page_slug)->first();
            $details = [
                'config' => $config,
                'content' => $content,
            ];
            return $details;
        }
        return null;
    }

}