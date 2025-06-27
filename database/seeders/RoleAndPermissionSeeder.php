<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view leads']);
        Permission::create(['name' => 'edit leads']);
        Permission::create(['name' => 'delete leads']);

        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo(Permission::all());

        $user = \App\Models\User::find(1); // or use factory
        $user->assignRole('Admin');
    }
}
