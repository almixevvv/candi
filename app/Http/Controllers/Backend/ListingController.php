<?php

namespace App\Http\Controllers\Backend;

use App\Rules\TagRule;
use App\Models\Listing;
use App\Models\ListingTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form\Listing\ListingCreateForm;
use App\Form\Listing\ListingSearchForm;

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
    public function index(Request $request)
    {
        $form = new ListingSearchForm([
            "method" => "GET",
            "action" => $this->index
        ]);

        $this->contextData['listings'] = $form->filter($request);
        $this->contextData['modalForm'] = $form;

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
        $listing->uploadImage360($request->file('image_360'));

        $listing->createOrUpdateMetadata([
            "title" => $request->title,
            "description" => $request->description,
            "robots" => $request->robots,
            "keywords" => $request->keywords,
            "canonical" => $request->canonical,
        ]);

        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $this->contextData['listing'] = Listing::with('image')->find($id);
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
                "wysiwyg" => true,
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

                // metadata details
                "description" => ($listing->metadata) ? $listing->metadata->description : "",
                "robots" => ($listing->metadata) ? $listing->metadata->robots : "",
                "keywords" => ($listing->metadata) ? $listing->metadata->keywords : "",
                "canonical" => ($listing->metadata) ? $listing->metadata->canonical : "",
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

        if ($request->file('image_360')) {
            $listing->removeImage360();
            $listing->uploadImage360($request->file('image_360'));
        }

        $listing->createOrUpdateMetadata([
            "title" => $request->title,
            "description" => $request->description,
            "robots" => $request->robots,
            "keywords" => $request->keywords,
            "canonical" => $request->canonical,
        ]);

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
        if ($listing->image_360_url != null) {
            $listing->removeImage360();
        }

        $listing->delete();
        return redirect($this->index);
    }
}
