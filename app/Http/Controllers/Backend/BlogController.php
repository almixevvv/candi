<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Form\Blog\BlogCreateForm;
use App\Form\Blog\BlogFilterForm;
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
    public function index(Request $request)
    {
        $form = new BlogFilterForm([
            "action" => $this->index,
            "method" => "GET"
        ]);

        $this->contextData['modalForm'] = $form;
        $this->contextData['blogs'] = $form->filter($request);

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

        $blog->createOrUpdateMetadata([
            "title" => $request->title,
            "description" => $request->description,
            "robots" => $request->robots,
            "keywords" => $request->keywords,
            "canonical" => $request->canonical,
        ]);

        $this->message("success", "Create success.");

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
                "category_id" => $blog->category_id,

                // metadata
                "description" => ($blog->metadata) ? $blog->metadata->description : "",
                "robots" => ($blog->metadata) ? $blog->metadata->robots : "",
                "keywords" => ($blog->metadata) ? $blog->metadata->keywords : "",
                "canonical" => ($blog->metadata) ? $blog->metadata->canonical : "",
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

        $blog->createOrUpdateMetadata([
            "title" => $request->title,
            "description" => $request->description,
            "robots" => $request->robots,
            "keywords" => $request->keywords,
            "canonical" => $request->canonical,
        ]);

        $this->message("success", "Update success.");

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

        $this->message("success", "Delete success.");

        return redirect($this->index);
    }
}
