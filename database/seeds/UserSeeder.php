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
        //membuat role
        $adminRole = new Role();
        $adminRole->name = "superadmin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        $admin = new User ();
        $admin->name = "Febrianto";
        $admin->email = "febrian99@gmail.com";
        $admin->password =bcrypt ('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}