<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function welcome($page_slug)
    {
        $page_slug = 'welcome';
        return $this->page($page_slug);
    }

    public function page($page_slug)
    {
        $page_details = $this->pageService->get_page($page_slug);
        if ($page_details) {
            return view('page', $page_details);
        }
        return abort(404);
    }

}
