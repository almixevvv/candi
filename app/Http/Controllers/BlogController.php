<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogCategory;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request) 
    {
    	$blogCategories = BlogCategory::with('blogs')->get();
    	return view('front.blog.index', compact('request', 'blogCategories'));
    }

    public function detail(Request $request, int $id) 
    {
    	$blog = Blog::with('category')->where('id', $id)->firstOrFail();
    	$older = Blog::where('category_id', $blog->category_id)
    			->where('id', '<', $blog->id)
    			->orderBy('created_at', 'desc')
    			->first();

    	$newer = Blog::where('category_id', $blog->category_id)
    			->where('id', '>', $blog->id)
    			->orderBy('created_at', 'desc')
    			->first();

    	// dd($older, $newer);

    	return view('front.blog.detail', compact('request', 'blog', 'older', 'newer'));
    }
}
