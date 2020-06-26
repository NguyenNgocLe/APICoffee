<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        
    ];

    public function boot()
    {
        $this->registerPolicies();
        //
        Gate::define('Admin', function($user) {
            if ($user->loai_nhan_vien_id === 1) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Nhân viên thu ngân', function($user) {
            if ($user->loai_nhan_vien_id === 2) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Nhân viên pha chế', function($user) {
            if($user->loai_nhan_vien_id === 3) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Nhân viên phục vụ', function($user) {
            if($user->loai_nhan_vien_id === 4) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Nhân viên kho', function($user) {
            if ($user->loai_nhan_vien_id === 5) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Khách hàng', function($user) {
            if (!isset($user->loai_nhan_vien)) {
                return true;
            }
            throw new AuthorizationException;
        });
        //
        Gate::define('Admin|Nhân viên', function($user) {
            if ($user->loai_nhan_vien_id === 1 ||
                $user->loai_nhan_vien_id === 2 ||
                $user->loai_nhan_vien_id === 3 ||
                $user->loai_nhan_vien_id === 4 ||
                $user->loai_nhan_vien_id === 5) {
                return true;
            }   
            throw new AuthorizationException;
        });
        Gate::define('Admin|Nhân viên thu ngân', function($user) {
            if ($user->loai_nhan_vien_id === 1 || $user->loai_nhan_vien_id === 2) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Admin|Nhân viên pha chế', function($user) {
            if ($user->loai_nhan_vien_id === 1 || $user->loai_nhan_vien_id === 3) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Admin|Nhân viên phục vụ', function($user) {
            if ($user->loai_nhan_vien_id === 1 || $user->loai_nhan_vien_id === 4) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Admin|Nhân viên kho', function($user) {
            if ($user->loai_nhan_vien_id === 1 || $user->loai_nhan_vien_id === 5) {
                return true;
            }
            throw new AuthorizationException;
        });
        Gate::define('Admin|Khách hàng', function($user) {
            if ($user->loai_nhan_vien_id === 1 || !isset($user->loai_nhan_vien)) {
                return true;
            }   
            throw new AuthorizationException;
        });
        //
        Gate::define('Admin|Nhân viên|Khách hàng', function($user) {
            if ($user->loai_nhan_vien_id === 1 ||
                $user->loai_nhan_vien_id === 2 ||
                $user->loai_nhan_vien_id === 3 ||
                $user->loai_nhan_vien_id === 4 ||
                $user->loai_nhan_vien_id === 5 ||
                !isset($user->loai_nhan_vien)) {
                return true;
            }   
            throw new AuthorizationException;
        });
    }
}
