<?php

namespace App\Http\Controllers\Backend;

use App\Models\Image;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Form\WhoWeAre\WhoWeAreEditForm;

class WhoWeAreController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.waw.index');
        $this->contextData = [
            'title' => 'Who We Are'
        ];
    }

    public function index() 
    {
        $whoWeAre = WhoWeAre::first();
        $this->contextData['form'] = new WhoWeAreEditForm([
            "action" => route('cms.waw.store'),
            "method" => "POST",
            "data" => [
                "contents" => $whoWeAre->contents
            ],
            "extra" => [
                "uploadTo" => class_basename(WhoWeAre::class)
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    public function store(Request $request) 
    {
        $whoWeAre = WhoWeAre::first();
        $whoWeAre->contents = $request->contents;
        $whoWeAre->save();

        Cache::delete(url()->previous() . ":image_ids");
        return redirect($this->index);
    }
}
