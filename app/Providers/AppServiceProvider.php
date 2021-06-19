<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('titleFormat', function ($value) {
            $value = str_replace('_', ' ', $value);
            $value = str_replace('-', ' ', $value);

            return Str::title($value);
        });

        Paginator::useBootstrap();
    }
}
