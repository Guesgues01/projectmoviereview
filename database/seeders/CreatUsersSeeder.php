<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class CreatUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'admin' => '1',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'admin' => '0',
                'password' => bcrypt('user1234')
            ]
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}
