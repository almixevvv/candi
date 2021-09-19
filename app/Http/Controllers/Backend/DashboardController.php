<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() 
    {
        $latestListing = Listing::with('image')->orderBy('id', 'desc')->limit(5)->get();
        $latestBlog = Blog::with('image', 'category')->whereNotNull('category_id')->orderBy('id', 'desc')->limit(5)->get();
        $latestContact = Contact::orderBy('id', 'desc')->limit(5)->get();
        return view('cms.dashboard.index', compact('latestListing', 'latestBlog', 'latestContact'));
    }
}
