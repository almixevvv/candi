<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use App\Models\Home;
use App\Models\Banner;
use App\Models\Listing;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
    	$blogCategories = BlogCategory::with(['blogs', 'blogs.image'])
        ->whereHas('blogs', function($query) {
            $query->orderBy('created_at', 'desc');
            $query->whereNotNull('category_id');
        })->take(4)->orderBy('id')->get();

        $topDestinations = Listing::getTopDestinations();

        $homeData = Home::first();

        $banners = Banner::with('image')->orderBy('position')->get();

    	return view('front.home.index', compact('request', 'blogCategories', 'topDestinations', 'homeData', 'banners'));
    }
}
