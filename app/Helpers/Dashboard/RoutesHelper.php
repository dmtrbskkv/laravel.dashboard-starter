<?php

namespace App\Helpers\Dashboard;

use App\Helpers\Helper;
use Illuminate\Support\Facades\Route;

class RoutesHelper extends Helper
{
    const USER_ROUTES = [
        'users',
        'users-create',
        'users-edit'
    ];
    const DEMO_ROUTES = [
        'dashboard-demo-description',
        'dashboard-demo-forms',
        'dashboard-demo-containers',
        'dashboard-demo-tables',
    ];

    public static function isUsersSection()
    {
        $currentRoute = Route::getCurrentRoute()->getName();
        return in_array($currentRoute, self::USER_ROUTES);
    }

    public static function isDemoSection()
    {
        $currentRoute = Route::getCurrentRoute()->getName();
        return in_array($currentRoute, self::DEMO_ROUTES);
    }
}
