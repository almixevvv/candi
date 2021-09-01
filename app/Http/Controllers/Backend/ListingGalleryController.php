<?php

namespace App\Http\Controllers\Backend;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\ListingGallery;
use App\Http\Controllers\Controller;
use App\Form\ListingGallery\ListingGalleryCreateForm;

class ListingGalleryController extends Controller
{
    public function __construct()
    {
        $this->index = route('cms.listings.index');
        $this->contextData = [
            'title' => 'Galleries'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Listing $listing)
    {
        $this->contextData['listing'] = $listing;
        $this->contextData['galleries'] = ListingGallery::with('image')->where('listing_id', $listing->id)->paginate(config('app.paginator_count'));

        return view('cms.listings.galleries.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Listing $listing)
    {
        $this->contextData['form'] = new ListingGalleryCreateForm([
            "method" => "POST",
            "action" => route('cms.listings.galleries.store', $listing)
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Listing $listing)
    {
        $this->validate($request, [
            "image" => "required|image"
        ]);

        $listingGallery = $listing->galleries()->create();

        $listingGallery->addImage($request->file('image'));
        $this->message('success', 'Image has been added.');

        return redirect()->route('cms.listings.galleries.index', $listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing, $id)
    {
        $listingGallery = ListingGallery::with('image')->findOrFail($id);
        
        $this->contextData['form'] = new ListingGalleryCreateForm([
            "method" => "PUT",
            "action" => route('cms.listings.galleries.update', ['listing' => $listing, 'id' => $id])
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
    public function update(Request $request, Listing $listing, $id)
    {
        $listingGallery = ListingGallery::with('image')->findOrFail($id);

        $this->validate($request, [
            "image" => "required|image"
        ]);

        $listingGallery->removeAllImage();
        $listingGallery->addImage($request->file('image'));
        $this->message('success', 'Image has been updated.');

        return redirect()->route('cms.listings.galleries.index', $listing);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing, $id)
    {
        $listingGallery = ListingGallery::findOrFail($id);

        $listingGallery->removeAllImage();
        $listingGallery->delete();
        $this->message('success', 'Image has been deleted.');

        return redirect()->route('cms.listings.galleries.index', $listing);
    }
}
