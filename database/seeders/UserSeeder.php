<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $password = 'root';

        /** @var User $user */
        $user = (new User())::firstOrCreate(['email' => 'root'], ['password' => bcrypt($password)]);

        $user->setAttribute('password', bcrypt($password));
        $user->setAttribute('is_client', false);
        $user->save();
    }
}
