<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [
            [
                'name' => 'list-category',
                'slug' => 'list-category',
            ],
            [
                'name' => 'create-category',
                'slug' => 'create-category',
            ],
            [
                'name' => 'update-category',
                'slug' => 'update-category',
            ],
            [
                'name' => 'delete-category',
                'slug' => 'delete-category',
            ],
            [
                'name' => 'list-product',
                'slug' => 'list-product',
            ],
            [
                'name' => 'create-product',
                'slug' => 'create-product',
            ],
            [
                'name' => 'update-product',
                'slug' => 'update-product',
            ],
            [
                'name' => 'delete-product',
                'slug' => 'delete-product',
            ]
        ];

        foreach ($permissions as $permission){
            Permission::create($permission);
        }


    }
}
