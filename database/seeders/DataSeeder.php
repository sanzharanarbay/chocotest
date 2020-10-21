<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users_roles = [
            [
                'user_id' => 1,
                'role_id' => 1,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ],
            [
                'user_id' => 3,
                'role_id' => 3,
            ]
        ];

        foreach ($users_roles as $users_role){
            DB::table('users_roles')->insert($users_role);
        }

        $category_permissions = [
            [
                'role_id' => 1,
                'permission_id' => 1,
            ],
            [
                'role_id' => 1,
                'permission_id' => 2,
            ],
            [
                'role_id' => 1,
                'permission_id' => 3,
            ],
            [
                'role_id' => 1,
                'permission_id' => 4,
            ],
            [
                'role_id' => 2,
                'permission_id' => 1,
            ],
            [
                'role_id' => 2,
                'permission_id' => 2,
            ],
            [
                'role_id' => 2,
                'permission_id' => 3,
            ],
            [
                'role_id' => 3,
                'permission_id' => 1,
            ],
            [
                'role_id' => 3,
                'permission_id' => 2,
            ]
        ];

        foreach ($category_permissions as $category_permission){
            DB::table('roles_permissions')->insert($category_permission);
        }

        $product_permissions = [
            [
                'role_id' => 1,
                'permission_id' => 5,
            ],
            [
                'role_id' => 1,
                'permission_id' => 6,
            ],
            [
                'role_id' => 1,
                'permission_id' => 7,
            ],
            [
                'role_id' => 1,
                'permission_id' => 8,
            ],
            [
                'role_id' => 2,
                'permission_id' => 5,
            ],
            [
                'role_id' => 2,
                'permission_id' => 6,
            ],
            [
                'role_id' => 2,
                'permission_id' => 7,
            ],
            [
                'role_id' => 3,
                'permission_id' => 5,
            ],
            [
                'role_id' => 3,
                'permission_id' => 6,
            ]
        ];

        foreach ($product_permissions as $product_permission){
            DB::table('roles_permissions')->insert($product_permission);
        }

        $users_permissions = [
            [
                'user_id' => 1,
                'permission_id' => 1,
            ],
            [
                'user_id' => 1,
                'permission_id' => 2,
            ],
            [
                'user_id' => 1,
                'permission_id' => 3,
            ],
            [
                'user_id' => 1,
                'permission_id' => 4,
            ],
            [
                'user_id' => 2,
                'permission_id' => 1,
            ],
            [
                'user_id' => 2,
                'permission_id' => 2,
            ],
            [
                'user_id' => 2,
                'permission_id' => 3,
            ],
            [
                'user_id' => 3,
                'permission_id' => 1,
            ],
            [
                'user_id' => 3,
                'permission_id' => 2,
            ],
            ////
            [
                'user_id' => 1,
                'permission_id' => 5,
            ],
            [
                'user_id' => 1,
                'permission_id' => 6,
            ],
            [
                'user_id' => 1,
                'permission_id' => 7,
            ],
            [
                'user_id' => 1,
                'permission_id' => 8,
            ],
            [
                'user_id' => 2,
                'permission_id' => 5,
            ],
            [
                'user_id' => 2,
                'permission_id' => 6,
            ],
            [
                'user_id' => 2,
                'permission_id' => 7,
            ],
            [
                'user_id' => 3,
                'permission_id' => 5,
            ],
            [
                'user_id' => 3,
                'permission_id' => 6,
            ],
        ];

        foreach ($users_permissions as $users_permission){
            DB::table('users_permissions')->insert($users_permission);
        }


    }
}
