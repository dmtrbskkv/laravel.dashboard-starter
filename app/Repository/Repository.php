<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    protected static string $model = Model::class;

    protected static function model()
    {
        $className = self::$model;
        return new $className();
    }
}
