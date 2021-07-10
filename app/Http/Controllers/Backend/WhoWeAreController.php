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
                "contents" => $whoWeAre ? $whoWeAre->contents : "",

                // metadata
                "title" => ($whoWeAre->metadata) ? $whoWeAre->metadata->title : "",
                "description" => ($whoWeAre->metadata) ? $whoWeAre->metadata->description : "",
                "robots" => ($whoWeAre->metadata) ? $whoWeAre->metadata->robots : "",
                "keywords" => ($whoWeAre->metadata) ? $whoWeAre->metadata->keywords : "",
                "canonical" => ($whoWeAre->metadata) ? $whoWeAre->metadata->canonical : "",
            ],
            "extra" => [
                "wysiwyg" => true
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    public function store(Request $request) 
    {
        $whoWeAre = WhoWeAre::first();
        $whoWeAre->contents = $request->contents;
        $whoWeAre->save();

        $whoWeAre->createOrUpdateMetadata([
            "title" => $request->title,
            "description" => $request->description,
            "robots" => $request->robots,
            "keywords" => $request->keywords,
            "canonical" => $request->canonical,
        ]);

        Cache::delete(url()->previous() . ":image_ids");

        $this->message("success", "Update success.");
        return redirect($this->index);
    }
}
