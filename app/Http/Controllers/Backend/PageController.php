<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Form\Page\PageCreateForm;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.pages.index');
        $this->contextData = [
            'title' => 'Pages'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['table'] = $this->getBaseTableContextData(
            data: Page::paginate(config('app.pagination_limit')),
            title: ["Slug", "Title", 'Is Active'],
            fields: ["slug", "title", 'is_active_display'],
            path: "pages",
            hasDetail: true
        );

        return view('cms.base_table', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new PageCreateForm([
            "method" => "POST",
            "action" => route('cms.pages.store'),
            "extra" => [
                "wysiwyg" => true
            ],
            "data" => ['is_active' => 0]
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
            "slug" => "required|unique:pages,slug",
            "title" => "required",
            "content" => "required",
            "is_active" => "required"
        ]);

        $data = $request->except('_token');
        $data['slug'] = Str::of($data['slug'])->replace(" ", "-")->__toString();
        
        Page::create($data);
        $this->message('success', 'Page has been created.');

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
    public function edit(Page $page)
    {
        $this->contextData['form'] = new PageCreateForm([
            "method" => "PUT",
            "action" => route('cms.pages.update', $page),
            "extra" => [
                "wysiwyg" => true
            ],
            "data" => [
                "slug" => $page->slug,
                "title" => $page->title,
                "content" => $page->content,
                "is_active" => $page->is_active
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
    public function update(Request $request, Page $page)
    {
        $this->validate($request, [
            "slug" => "required|unique:pages,slug,".$page->id,
            "title" => "required",
            "content" => "required",
            "is_active" => "required"
        ]);

        $data = $request->except('_token', '_method');
        $data['slug'] = Str::of($data['slug'])->replace(" ", "-")->__toString();

        $page->update($data);
        $this->message('success', 'Page has been updated.');

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        $this->message('success', 'Page has been deleted.');

        return redirect($this->index);
    }
}
