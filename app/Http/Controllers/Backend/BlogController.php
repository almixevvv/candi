<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Form\Blog\BlogCreateForm;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.blog.index');
        $this->contextData = [
            'title' => 'Blog'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['blogs'] = Blog::orderBy('id', 'desc')->paginate(config('app.pagination_limit'));

        return view('cms.blog.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new BlogCreateForm([
            "action" => route('cms.blog.store'),
            "method" => "POST",
            "extra" => [
                "wysiwyg" => true
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "content" => "required",
            "category_id" => "required",
            "image" => "required|image"
        ]);

        $blog = Blog::create($request->except('_token', '_method', 'image'));

        $blog->addImage($request->file('image'));

        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $this->contextData['blog'] = $blog;

        return view('cms.blog.show', $this->contextData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $this->contextData['form'] = new BlogCreateForm([
            "action" => route('cms.blog.update', $blog),
            "method" => "PUT",
            "extra" => [
                "wysiwyg" => true,
                "helpText" => "You will replace the image if you upload a new image"
            ],
            "data" => [
                "title" => $blog->title,
                "content" => $blog->content,
                "category_id" => $blog->category_id
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            "title" => "required",
            "content" => "required",
            "category_id" => "required",
            "image" => "image"
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category_id = $request->category_id;
        $blog->save();

        if ($request->file('image')) {
            $blog->removeAllImage();
            $blog->addImage($request->file('image'));
        }

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->removeAllImage();
        $blog->delete();

        return redirect($this->index);
    }
}