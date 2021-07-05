<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogCategory;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
    	$homeBlog = BlogCategory::with('blogs')->get();
    	return view('front.home.index', compact('request', 'homeBlog'));
    }
}
?>
