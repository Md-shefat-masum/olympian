<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Role::truncate();

        Role::insert([
            [ 
                'role_name' => 'Superadmin',
                'role_slug' => 'superadmin',
                'created_at' => now(),
            ],
            [ 
                'role_name' => 'Admin',
                'role_slug' => 'admin',
                'created_at' => now(),
            ],
            [ 
                'role_name' => 'Visitor',
                'role_slug' => 'visitor',
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
