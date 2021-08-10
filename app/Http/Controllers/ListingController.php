<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $this->contextData['listings'] = Listing::with('image', 'tags')->where('is_active', true)->get();
        $this->contextData['request']  = $request;

        return view('front.directory.index', $this->contextData);
    }

    public function detail(Request $request, string $slug)
    {
        $listingDetail = Listing::with('image', 'tags', 'ratings.category', 'faqs')->where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('front.directory.detail', compact('request', 'listingDetail'));
    }
}
