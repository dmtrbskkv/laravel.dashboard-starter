<?php

namespace App\Repository;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Users extends Repository
{
    protected static string $model = User::class;

    public static function hasRole($role, User $user = null): bool
    {
        if (!$user){
            $user = Auth::user();
            if (!$user){
                return false;
            }
        }

        if (!in_array($role, Role::ROLE_ACCESS_TYPES)){
            return false;
        }

        return $user->getAttribute('id') == 1 || $user->roles()->where('role', $role)->count() > 0;
    }
}
