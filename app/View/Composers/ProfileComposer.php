<?php
namespace App\View\Composers;

use App\Models\ProfileSetting;
use Illuminate\Contracts\View\View;
use App\View\Composers\ComposerContract;

class ProfileComposer implements ComposerContract
{
    public function compose(View $view)
    {
        $view->with('_profile', ProfileSetting::first());
    }
}
