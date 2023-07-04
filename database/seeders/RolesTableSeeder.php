<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' =>' super_admin']);
        $role2 =  Role::create(['name' => 'admin']);
        $role3 =  Role::create(['name' => 'teacher']);
        $role4 =  Role::create(['name' => 'user']);
    }
}
