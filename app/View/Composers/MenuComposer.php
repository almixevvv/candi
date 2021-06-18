<?php
namespace App\View\Composers;

use App\Models\Menu;
use Illuminate\Contracts\View\View;
use App\View\Composers\ComposerContract;

class MenuComposer implements ComposerContract
{
    public function compose(View $view)
    {
        // $menus = cache()->remember('menu', 60 * 60, function () {
        //     return Menu::with(['subMenu' => function ($query) {
        //         return $query->orderBy('id');
        //     }])->where('child_of', 0)->orderBy('id')->get();
        // });

        $menus = Menu::with([
            'subMenu' => function ($query) {
                return $query->orderBy('position');
            }
        ])->where('child_of', 0)->orderBy('position')->get();

        $view->with('_menus', $menus);
    }
}
