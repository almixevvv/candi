<?php

namespace App\Http\Controllers\Backend;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Form\Home\HomeEditForm;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.home.index');
        $this->contextData = [
            'title' => 'Home Settings'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::first();
        $data = $home 
            ? [
                "top_destination" => $home->top_destination,
                "sub_top_destination" => $home->sub_top_destination,
                "featured_blog" => $home->featured_blog,
                "sub_featured_blog" => $home->sub_featured_blog,
                "instagram_head" => $home->instagram_head,
                "sub_instagram_head" => $home->sub_instagram_head,
                "instagram_widget_url" => $home->instagram_widget_url,
            ]
            : [];

        $this->contextData['form'] = new HomeEditForm([
            "action" => route('cms.home.store'),
            "method" => "POST",
            "data" => $data
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
            "top_destination" => "required",
            "sub_top_destination" => "required",
            "featured_blog" => "required",
            "sub_featured_blog" => "required",
            "instagram_head" => "required",
            "sub_instagram_head" => "required",
            "instagram_widget_url" => "required",
        ]);

        $home = Home::first();

        if ($home) {
            $home->update($request->except('_token'));
        } else {
            Home::create($request->except('_token'));
        }

        $this->message('success', 'Home data has been updated');

        return redirect($this->index);
    }
}
