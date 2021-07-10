<?php

namespace App\Http\Controllers;

use App\Models\Purpose;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function contact(Request $request)
    {
        $purposes = Purpose::orderBy('name')->get();
        return view('front.contact.index', compact('request', 'purposes'));
    }
}
