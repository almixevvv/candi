<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function contact(Request $request) 
    {
        return view('front.contact.index', compact('request'));
    }
}
