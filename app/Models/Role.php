<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    use HasFactory;

    protected $table = 'user_roles';

    const ROLE_ACCESS_TYPE_USERS = 1;
    const ROLE_ACCESS_TYPE_DEMO = 2;

    const ROLE_ACCESS_TYPES = [
        self::ROLE_ACCESS_TYPE_USERS,
    ];

    const ROLE_ACCESS_TYPES_LABELS = [
        self::ROLE_ACCESS_TYPE_USERS => 'Пользователи',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
