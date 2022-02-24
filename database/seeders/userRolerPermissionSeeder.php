<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class userRolerPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++){
            $permission = \Spatie\Permission\Models\Permission::find($i);
            $role = \Spatie\Permission\Models\Role::find($i)->givePermissionTo($permission);
            $user = User::find(1)->assignRole($role);
        }

    }
}
