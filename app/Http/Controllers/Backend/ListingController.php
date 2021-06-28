<?php

namespace App\Http\Controllers\Backend;

use App\Rules\TagRule;
use App\Models\Listing;
use App\Models\ListingTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form\Listing\ListingCreateForm;

class ListingController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.listings.index');
        $this->contextData = [
            'title' => 'Listing'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['listings'] = Listing::orderBy('id', 'desc')->paginate(config('app.pagination_limit'));

        return view('cms.listings.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new ListingCreateForm([
            "method" => "POST",
            "action" => route('cms.listings.store'),
            "extra" => [
                "uploadTo" => class_basename(Listing::class)
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
            "details" => "required",
            "address" => "required",
            "lat" => "required|numeric",
            "long" => "required|numeric",
            "low_price" => "required|numeric|min:1",
            "high_price" => "required|numeric|min:1",
            "tags" => ["required", new TagRule],
            "category_id" => "required",
            "image" => "required|image"
        ]);

        $listing = Listing::create($request->except('_token', '_method', 'tags'));

        $tagData = collect(json_decode($request->tags))->map(fn ($value) => $value->value);
        $tags = [];
        foreach ($tagData as $tag) {
            $tags[] = ListingTag::where('name', $tag)->firstOrFail();
        }

        $tags = collect($tags)->map(fn ($value) => $value->id);
        $listing->tags()->attach($tags);

        $listing->addImage($request->file('image'));

        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        $this->contextData['listing'] = $listing;
        return view('cms.listings.show', $this->contextData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        $this->contextData['form'] = new ListingCreateForm([
            "method" => "PUT",
            "action" => route('cms.listings.update', $listing),
            "extra" => [
                "uploadTo" => class_basename(Listing::class),
                "helpText" => "You will replace the image if you upload a new image"
            ],
            "data" => [
                "title" => $listing->title,
                "address" => $listing->address,
                "lat" => $listing->lat,
                "long" => $listing->long,
                "low_price" => $listing->low_price,
                "high_price" => $listing->high_price,
                "category_id" => $listing->category_id,
                "tags" => $listing->tags->map(fn ($value) => $value->name),
                "details" => $listing->details,
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
    public function update(Request $request, Listing $listing)
    {
        $this->validate($request, [
            "title" => "required",
            "details" => "required",
            "address" => "required",
            "lat" => "required|numeric",
            "long" => "required|numeric",
            "low_price" => "required|numeric|min:1",
            "high_price" => "required|numeric|min:1",
            "tags" => ["required", new TagRule],
            "category_id" => "required",
            "image" => "image"
        ]);

        $listing->update($request->except('_token', '_method', 'tags'));
        $listing->tags()->toggle($listing->tags->map(fn ($value) => $value->id));

        $tagData = collect(json_decode($request->tags))->map(fn ($value) => $value->value);
        $tags = [];
        foreach ($tagData as $tag) {
            $tags[] = ListingTag::where('name', $tag)->firstOrFail();
        }

        $tags = collect($tags)->map(fn ($value) => $value->id);
        $listing->tags()->attach($tags);

        if ($request->file('image')) {
            $listing->removeAllImage();
            $listing->addImage($request->file('image'));
        }

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->removeAllImage();
        $listing->delete();
        return redirect($this->index);
    }
}