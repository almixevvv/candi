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
        
        Str::macro('phoneFormat', function ($value) {
            if (!Str::startsWith($value, '62')) return $value;

            $splittedString = explode("62", $value)[1];
            return "(+62) " . implode(" ", str_split($splittedString, 4));
        });
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
