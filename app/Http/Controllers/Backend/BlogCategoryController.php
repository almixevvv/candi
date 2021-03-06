<?php

namespace App\Http\Controllers\Backend;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form\BlogCategories\BlogCategoriesCreateForm;
use App\Form\BlogCategories\BlogCategoriesFilterForm;

class BlogCategoryController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.blog-categories.index');
        $this->contextData = [
            'title' => 'Blog Categories'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $form = new BlogCategoriesFilterForm([
            "action" => $this->index,
            "method" => "GET"
        ]);
        $this->contextData['modalForm'] = $form;
        $this->contextData['blogCategories'] = $form->filter($request);

        return view('cms.blog-categories.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new BlogCategoriesCreateForm([
            "action" => route('cms.blog-categories.store'),
            "method" => "POST"
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
            "name" => "required"
        ]);

        BlogCategory::create($request->only('name'));

        $this->message("success", "Create success.");
        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        $this->contextData['form'] = new BlogCategoriesCreateForm([
            "action" => route('cms.blog-categories.update', $blogCategory),
            "method" => "PUT",
            "data" => [
                "name" => $blogCategory->name
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
    public function update(Request $request, BlogCategory $blogCategory)
    {
        $this->validate($request, [
            "name" => "required"
        ]);

        $blogCategory->name = $request->name;
        $blogCategory->save();

        $this->message("success", "Update success.");

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        $this->message("success", "Delete success.");
        return redirect($this->index);
    }
}
