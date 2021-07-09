<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ProfileSetting;
use App\Http\Controllers\Controller;
use App\Form\Settings\ProfileUpdateForm;

class SettingController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.blog.index');
        $this->contextData = [
            'title' => 'Setting'
        ];
    }

    public function profile() 
    {
        $profileSetting = ProfileSetting::first();
        $this->contextData['title'] = "Profile Setting";
        $this->contextData['form'] = new ProfileUpdateForm([
            "action" => route('cms.profile.update'),
            "method" => "POST",
            "data" => [
                "address" => $profileSetting->address,
                "phone_number" => $profileSetting->phone_number,
                "email" => $profileSetting->email,
                "open_day_range" => $profileSetting->open_day_range,
                "open_hour_range" => $profileSetting->open_hour_range,
                "facebook" => $profileSetting->facebook,
                "instagram" => $profileSetting->instagram,
                "twitter" => $profileSetting->twitter
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    public function updateProfile(Request $request) 
    {
        $this->validate($request, [
            "address" => "required",
            "phone_number" => "required",
            "email" => "required",
            "open_day_range" => "required",
            "open_hour_range" => "required",
            "facebook" => "present",
            "instagram" => "present",
            "twitter" => "present",
        ]);

        $profileSetting = ProfileSetting::first()->update($request->except('_token'));

        return redirect(route('cms.profile.index'));
    }
}
