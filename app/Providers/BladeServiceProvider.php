<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
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
        Blade::if('hasRole', function($role) {
            $user = Auth::user();

            // return false if not authenticate
            if (!$user) return false;

            // if role is empty pass the process
            if (!$role) return true;

            $roles = $user->roles->map(fn ($value) => $value->name);

            // always pass if superuser
            if ($roles->contains('superuser')) {
                return true;
            }

            return $roles->contains($role);
        });
    }
}
