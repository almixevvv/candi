<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use App\View\Composers\IconComposer;
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\ServiceProvider;

class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.cms.sidebar', MenuComposer::class);
        View::composer('*', IconComposer::class);
        View::composer('*', ProfileComposer::class);
    }
}
