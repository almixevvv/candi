<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ListingRatingCategory;
use App\Form\ListingRatingCategory\ListingRatingCategoryCreateForm;

class ListingRatingCategoryController extends Controller
{
    public function __construct()
    {
        $this->index = route('cms.rating_categories.index');
        $this->contextData = [
            'title' => 'Rating Category'
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
            ListingRatingCategory::paginate(config('app.pagination_limit')),
            ["Name"],
            ["name"],
            "rating_categories"
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
        $this->contextData['form'] = new ListingRatingCategoryCreateForm([
            "method" => "POST",
            "action" => route('cms.rating_categories.store')
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
            'name' => 'required|unique:listing_rating_categories,name'
        ]);

        ListingRatingCategory::create($request->except('_token', '_method'));
        $this->message('success', 'Category has been created.');

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
    public function edit(ListingRatingCategory $ratingCategory)
    {
        $this->contextData['form'] = new ListingRatingCategoryCreateForm([
            "method" => "PUT",
            "action" => route('cms.rating_categories.update', $ratingCategory),
            "data" => [
                "name" => $ratingCategory->name
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
    public function update(Request $request, ListingRatingCategory $ratingCategory)
    {
        $this->validate($request, [
            "name" => "required"
        ]);

        $ratingCategory->update($request->only('name'));
        $this->message('success', 'Category has been updated.');
        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingRatingCategory $ratingCategory)
    {
        $ratingCategory->delete();
        $this->message('success', 'Category has been deleted.');
        return redirect($this->index);
    }
}
