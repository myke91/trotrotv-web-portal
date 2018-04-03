<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'TrotroTV Admin',
                'username' => 'trotrotv',
                'email' => 'admin@trotro.tv',
                'password' => 'admin',
                'remember_token' => str_random(10),
            ]

        );
    }
}
