<?php
namespace App\View\Composers;

use App\Models\ProfileSetting;
use Illuminate\Contracts\View\View;
use App\Models\FrontendMenuCategory;
use App\View\Composers\ComposerContract;

class ProfileComposer implements ComposerContract
{
    public function compose(View $view)
    {
        $view->with('_profile', ProfileSetting::first());
        $footerMenu = FrontendMenuCategory::with('menus.page')->where('code', 'footer')->first()->menus;
        $view->with('_footerMenu', $footerMenu);
    }
}
