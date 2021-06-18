<?php
namespace App\View\Composers;

use App\Utils\Icon;
use App\Models\Menu;
use Illuminate\Contracts\View\View;
use App\View\Composers\ComposerContract;

class IconComposer implements ComposerContract
{
    public function compose(View $view)
    {
        $view->with('_icon', new Icon);
    }
}
