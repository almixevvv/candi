<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ListingCategory;
use App\Http\Controllers\Controller;
use App\Form\ListingCategory\ListingCategoryCreateForm;

class ListingCategoryController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.listing-categories.index');
        $this->contextData = [
            'title' => 'Listing Categories'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['listingCategories'] = ListingCategory::orderBy('id', 'desc')->paginate(config('app.pagination_limit'));

        return view('cms.listing-categories.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new ListingCategoryCreateForm([
            "action" => route('cms.listing-categories.store'),
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
            "name" => "required",
            "image" => "required|image"
        ]);

        $listingCategory = ListingCategory::create([
            "name" => $request->name
        ]);

        $listingCategory->addImage($request->file('image'));
        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListingCategory $listingCategory)
    {
        $this->contextData['listingCategory'] = $listingCategory;

        return view('cms.listing-categories.show', $this->contextData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListingCategory $listingCategory)
    {
        $this->contextData['form'] = new ListingCategoryCreateForm([
            "action" => route('cms.listing-categories.update', $listingCategory),
            "method" => "PUT",
            "data" => [
                "name" => $listingCategory->name
            ],
            "extra" => [
                "helpText" => "You will replace the image if you upload a new image"
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
    public function update(Request $request, ListingCategory $listingCategory)
    {
        $this->validate($request, [
            "name" => "required",
            "image" => "image"
        ]);

        $listingCategory->name = $request->name;
        $listingCategory->save();

        if ($request->file('image')) {
            $listingCategory->removeAllImage();
            $listingCategory->addImage($request->file('image'));
        }

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingCategory $listingCategory)
    {
        $listingCategory->delete();
        return redirect($this->index);
    }
}