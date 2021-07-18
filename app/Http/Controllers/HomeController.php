<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogCategory;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
    	$blogCategories = BlogCategory::with([
            'blogs' => function($query) {
                $query->orderBy('created_at', 'desc');
            },
            'blogs.image'
        ])->get();

    	return view('front.home.index', compact('request', 'blogCategories'));
    }
}
