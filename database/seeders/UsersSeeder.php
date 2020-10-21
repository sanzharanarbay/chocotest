<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'Admin Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Moderator Moderator',
                'email' => 'moderator@gmail.com',
                'password' => bcrypt('moderator123'),
            ],
            [
                'name' => 'User user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user123'),
            ]
        ];

        foreach ($users as $user){
            User::create($user);
        }


    }
}
