<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    use HasFactory;

    protected $table = 'user_roles';

    const ROLE_ACCESS_TYPE_USERS = 'users';
    const ROLE_ACCESS_TYPE_BLOCK = 'demo_blocks';

    const ROLE_ACCESS_TYPES = [
        self::ROLE_ACCESS_TYPE_USERS,
        self::ROLE_ACCESS_TYPE_BLOCK,
    ];

    const ROLE_ACCESS_TYPES_LABELS = [
        self::ROLE_ACCESS_TYPE_USERS => 'Пользователи',
        self::ROLE_ACCESS_TYPE_BLOCK => 'Доступные блоки',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
