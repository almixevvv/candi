<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function show(Page $page) 
    {
        if (! $page->is_active) {
            abort(404);
        }

        return view('front.custom_page.page', [
            "page" => $page,
            "title" => $page->title
        ]);
    }
}
