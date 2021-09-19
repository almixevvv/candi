<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogCategory;
use App\Models\Blog;

class BlogController extends Controller
{
	public function index(Request $request)
	{
        $featuredBlogs = Blog::with('image')->where('is_featured', true)->get();
		$blogCategories = BlogCategory::with(['blogs' => function($query) {
            $query->where('is_featured', false);
            $query->whereNotNull('category_id');
        }, 'blogs.image'])->get();

		return view('front.blog.index', compact('request', 'blogCategories', 'featuredBlogs'));
	}

	public function detail(Request $request, $slug)
	{
		$blog = Blog::with('category', 'metadata')->where('slug', $slug)->firstOrFail();

		$older = Blog::where('category_id', $blog->category_id)
			->where('created_at', '<', $blog->created_at)
			->orderBy('created_at', 'desc')
			->first();

		$newer = Blog::where('category_id', $blog->category_id)
			->where('created_at', '>', $blog->created_at)
			->orderBy('created_at', 'asc')
			->first();

		return view('front.blog.detail', compact('request', 'blog', 'older', 'newer'));
	}
}
