<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'write_post', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit_post', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete_post', 'guard_name' => 'web']);
    }
}
