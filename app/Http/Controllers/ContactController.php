<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\BlogCategory;
use App\Models\Contact;

use Session;

class ContactController extends Controller
{
    // public function index(Request $request) 
    // {
    //     $blogCategories = BlogCategory::with('blogs')->get();
    //     return view('front.blog.index', compact('request', 'blogCategories'));
    // }

    // public function create()
    // {
    //     return "masuk";
    // } 

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "email" => "required|email",
            "purpose" => "required",
            "message" => "required"
        ]);

        Contact::create($request->all());
        Session::flash('message', 'Your message has been sent.');

        return redirect()->route('contact');
    }
}
