<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PageService;

class PageController extends Controller
{

    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function welcome()
    {
        $page_details = $this->pageService->get_page('welcome');
        if ($page_details) {
            $page_details['title'] = $page_details['title'] ?? 'Welcome';
            return view('welcome', $page_details);
        }
        return abort(404);
    }

    public function contact()
    {
        $page_details = $this->pageService->get_page('contact');
        if ($page_details) {
            $page_details['title'] = $page_details['title'] ?? 'Contact Us';
            return view('contact', $page_details);
        }
        return abort(404);
    }

}
