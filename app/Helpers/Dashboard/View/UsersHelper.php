<?php

namespace App\Helpers\Dashboard\View;

use App\Helpers\Helper;
use App\Models\Role;

class UsersHelper extends Helper
{
    public static function getRoles(): array
    {
        return Role::ROLE_ACCESS_TYPES_LABELS;
    }
}
