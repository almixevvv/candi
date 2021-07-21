<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use App\Models\Listing;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

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

        $topDestinations = Listing::getTopDestinations();

    	return view('front.home.index', compact('request', 'blogCategories', 'topDestinations'));
    }
}
