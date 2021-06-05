<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        // return view('front.whoweare.index', [
        //     'content'   => $modelContent,
        //     'pageName'  => 'Who are we'
        // ]);
    }

    public function create()
    {
        return view('cms.listing.index', [
            'pageName'  => 'Create New Listing'
        ]);
    }
}
