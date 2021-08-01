<?php

namespace App\Http\Controllers\Backend;

use App\Form\AdvWithUs\AdvWithUsForm;
use Illuminate\Http\Request;
use App\Models\AdvertiseWithUs;
use App\Http\Controllers\Controller;

class AdvertiseWithUsController extends Controller
{
    public function __construct()
    {
        $this->index = route('cms.adv.edit');
        $this->contextData = [
            'title' => 'Advertise With Us'
        ];
    }

    public function edit() 
    {
        $adv = AdvertiseWithUs::first();

        $this->contextData['form'] = new AdvWithUsForm([
            "action" => route('cms.adv.update'),
            "method" => "POST",
            "data" => [
                "content" => $adv ? $adv->content : ""
            ],
            "extra" => [
                "wysiwyg" => true
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    public function update(Request $request) 
    {
        $this->validate($request, ['content' => "required"]);

        $adv = AdvertiseWithUs::first();
        $adv->update($request->only('content'));

        return redirect($this->index);
    }
}
