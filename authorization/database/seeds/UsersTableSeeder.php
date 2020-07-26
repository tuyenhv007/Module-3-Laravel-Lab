<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // tao moi admin
        $user = new \App\User();
        $user->name = "adminUser";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("admin");
        $user->role = 1;
        $user->save();

        // tao user
        $user = new \App\User();
        $user->name = "user";
        $user->email = "user@gmail.com";
        $user->password = bcrypt("admin");
        $user->role = 0;
        $user->save();
    }
}
