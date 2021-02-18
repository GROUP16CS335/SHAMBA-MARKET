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
        ]);

        User::create([
            'name'=>'Vendor',
            'email'=>'vendor@gmail.com',
            'password'=>password_hash('vendor', PASSWORD_BCRYPT),
            'role_as'=>'vendor'
        ]);
        User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=>password_hash('user', PASSWORD_BCRYPT),
            'role_as'=>'user'
        ]);
    }
}
