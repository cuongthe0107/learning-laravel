<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'write', 'guard_name' => 'web']);
        Role::create(['name' => 'edit', 'guard_name' => 'web']);
        Role::create(['name' => 'delete', 'guard_name' => 'web']);
    }
}
