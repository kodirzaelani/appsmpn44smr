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
          $role = Role::find('d79bec08-0666-4418-9f5f-ebaaac5076f2');
          $permissions = Permission::all();

          $role->syncPermissions($permissions);

          //assign role with permission to user
          $user = User::find('7d23404b-7595-4484-b99b-9722bdf81e7a');
          $user->assignRole($role->name);

    }
}
