<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $this->contextData['listings'] = Listing::with('image', 'tags')->get();
        $this->contextData['request']  = $request;

        // return response($this->contextData['listings'], 200);

        return view('front.directory.index', $this->contextData);
    }

    public function detail(Request $request, int $id)
    {
        $listingDetail = Listing::with('image', 'tags')->where('id', $id)->firstOrFail();

        return view('front.directory.detail', compact('request', 'listingDetail'));
    }
}
