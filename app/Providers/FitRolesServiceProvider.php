<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FitRolesServiceProvider extends ServiceProvider
{
    public function register()
    {
        require_once app_path() . '/Helpers/FitRoles.php';
    }

    public function boot()
    {
        
    }
}
