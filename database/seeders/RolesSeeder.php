<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'name' => 'admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'moderator',
                'slug' => 'moderator',
            ],
            [
                'name' => 'user',
                'slug' => 'user',
            ]
        ];

        foreach($roles as $role){
            Role::create($role);
        }



    }
}
