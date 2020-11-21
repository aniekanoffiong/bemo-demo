<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PageService;
use App\Http\Requests\PageRequest;
use App\Http\Requests\ConfigRequest;
use App\Http\Requests\ContactRequest;

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

    public function page_data($type)
    {
        $page_details = $this->pageService->get_page_data($type);
        if ($page_details) {
            return response()->json(['status' => 'success', 'data' => $page_details], 200);
        }
        return response()->json(['status' => 'error'], 403);
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

    public function save_content(PageRequest $request)
    {
        if ($this->pageService->update_page_data($request)) {
            return response()->json(['status' => 'success'], 202);
        }
        return response()->json(['status' => 'error'], 403);
    }

    public function save_config(ConfigRequest $request)
    {
        if ($this->pageService->update_config($request)) {
            return response()->json(['status' => 'success'], 202);
        }
        return response()->json(['status' => 'error'], 403);
    }

    public function contact_submit(ContactRequest $request)
    {
        if ($this->pageService->send_mail($request)) {
            return back()->with(['status' => 'success']);
        }
        return back()->with(['status' => 'error']);
    }

}
