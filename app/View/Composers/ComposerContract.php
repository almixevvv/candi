<?php
namespace App\View\Composers;

use Illuminate\Contracts\View\View;

interface ComposerContract {
    public function compose(View $view);
}
