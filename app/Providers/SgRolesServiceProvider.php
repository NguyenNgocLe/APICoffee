<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SgRolesServiceProvider extends ServiceProvider
{
    public function register()
    {
        require_once app_path() . '/Helpers/SgRoles.php';
    }

    public function boot()
    {
        
    }
}
