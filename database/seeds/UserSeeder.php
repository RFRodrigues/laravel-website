<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class, 50)->create();
        // factory(User::class, 50)->create()->each(function ($user) {
        //     $user->role()->save(factory(Role::class)->make());
        // });
    }
}
