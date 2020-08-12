<?php

use Illuminate\Database\Seeder;
use App\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->rolename = "admin";
        $role->save();
        $role1 = new Role;
        $role1->rolename = "user";
        $role1->save();
    }
}
