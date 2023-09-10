<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //assign permission to role
        $role = Role::find('b95d1e04-20dc-4b02-aa11-d308f42af6a5');
        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        //assign role with permission to user
        $user = User::find('d5391303-159c-4c3e-a428-1b7c467b599e');
        $user->assignRole($role->name);
    }
}
