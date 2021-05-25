<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
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
        View::composer('components.cms.sidebar', function ($view) {
            $sidebarParent          = DB::table('s_appl_group')->get();
            $sidebarChild           = DB::table('s_appl')->get();
            $sidebarPermission      = DB::table('s_group_appl')->get();

            $view->sidebarParent        = $sidebarParent;
            $view->sidebarChild         = $sidebarChild;
            $view->sidebarPermission    = $sidebarPermission;
        });
    }
}
