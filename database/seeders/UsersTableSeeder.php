<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>password_hash('admin', PASSWORD_BCRYPT),
            'role_as'=>'admin'
        ],[
            'name'=>'Vendor',
            'email'=>'vendor@vendor.com',
            'password'=>password_hash('vendor', PASSWORD_BCRYPT),
            'role_as'=>'vendor'
        ],[
            'name'=>'User',
            'email'=>'user@user.com',
            'password'=>password_hash('user', PASSWORD_BCRYPT),
            'role_as'=>'user'
        ]);
    }
}
