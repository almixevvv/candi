<?php

namespace App\Http\Controllers\Backend;

use App\Models\ListingTag;
use Illuminate\Http\Request;
use App\Models\ListingTagCategory;
use App\Http\Controllers\Controller;
use App\Form\ListingTags\ListingTagAddTagForm;
use App\Form\ListingTags\ListingTagSearchForm;
use App\Form\ListingTags\ListingTagsCreateForm;

class ListingTagController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.listing-tags.index');
        $this->contextData = [
            'title' => 'Listing Tags'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $form = new ListingTagSearchForm([
            "action" => $this->index,
            "method" => "GET"
        ]);

        $this->contextData['listingTags'] = $form->filter($request);
        $this->contextData['modalForm'] = $form;

        return view('cms.listing-tags.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new ListingTagsCreateForm([
            "method" => "POST",
            "action" => route('cms.listing-tags.store')
        ]);

        $this->message("success", "Create success.");

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

        ListingTagCategory::create($request->except('_token', "_method"));

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
        $this->contextData['listingTagCategory'] =  ListingTagCategory::findOrFail($id);

        return view('cms.listing-tags.show', $this->contextData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listingTagCategory = ListingTagCategory::findOrFail($id);
        $this->contextData['form'] = new ListingTagsCreateForm([
            "action" => route('cms.listing-tags.update', $listingTagCategory),
            "method" => "PUT",
            "data" => [
                "name" => $listingTagCategory->name
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
    public function update(Request $request, $id)
    {
        $listingTagCategory = ListingTagCategory::findOrFail($id);

        $this->validate($request, [
            "name" => "required"
        ]);

        $listingTagCategory->name = $request->name;
        $listingTagCategory->save();

        $this->message("success", "Update success.");

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listingTagCategory = ListingTagCategory::findOrFail($id);
        $listingTagCategory->delete();

        $this->message("success", "Delete success.");
        return redirect($this->index);
    }

    public function addTag($tagID) 
    {
        $listingTagCategory = ListingTagCategory::findOrFail($tagID);
        $this->contextData['form'] = new ListingTagAddTagForm([
            "action" => route('cms.listing-tags.tags.store', ["tagID" => $listingTagCategory->id]),
            "method" => "POST"
        ]);

        return view('cms.base_form', $this->contextData);
    }

    public function storeTag(Request $request, $tagID) 
    {
        $listingTagCategory = ListingTagCategory::findOrFail($tagID);
        $this->validate($request, [
            "name" => "required"
        ]);

        ListingTag::create([
            "category_id" => $listingTagCategory->id,
            "name" => $request->name
        ]);

        $this->message("success", "Create success.");

        return redirect(route('cms.listing-tags.show', $listingTagCategory->id));
    }

    public function editTag($tagID, $id) 
    {
        $listingTagCategory = ListingTagCategory::findOrFail($tagID);
        $listingTag = ListingTag::findOrFail($id);

        $this->contextData['form'] = new ListingTagAddTagForm([
            "action" => route('cms.listing-tags.tags.update', ["tagID" => $listingTagCategory->id, "id" => $listingTag->id]),
            "method" => "PUT",
            "data" => [
                "name" => $listingTag->name
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    public function updateTag(Request $request, $tagID, $id) 
    {
        $listingTagCategory = ListingTagCategory::findOrFail($tagID);
        $listingTag = ListingTag::findOrFail($id);

        $this->validate($request, [
            "name" => "required"
        ]);

        $listingTag->name = $request->name;
        $listingTag->save();

        $this->message("success", "Update success.");

        return redirect(route('cms.listing-tags.show', $listingTagCategory->id));
    }

    public function destroyTag($tagID, $id) 
    {
        $listingTagCategory = ListingTagCategory::findOrFail($tagID);
        ListingTag::findOrFail($id)->delete();

        $this->message("success", "Delete success.");

        return redirect(route('cms.listing-tags.show', $listingTagCategory->id));
    }
}
