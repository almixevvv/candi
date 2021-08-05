<?php
namespace App\View\Composers;

use App\Models\ProfileSetting;
use Illuminate\Contracts\View\View;
use App\Models\FrontendMenu;
use App\Models\FrontendMenuCategory;
use App\View\Composers\ComposerContract;

class ProfileComposer implements ComposerContract
{
    public function compose(View $view)
    {
        // prevent multiple load on single hit
        $view->with('_profile', cache()->remember('profile_settings', 2, function () {
            return ProfileSetting::first();
        }));

        $footerMenu = cache()->remember('frontend_menu', 60 * 60, function () {
            $category = FrontendMenuCategory::where('code', 'footer')->first();
            return FrontendMenu::with('page')->where('frontend_menu_category_id', $category->id)->get();
        });

        $view->with('_footerMenu', $footerMenu);
    }
}
