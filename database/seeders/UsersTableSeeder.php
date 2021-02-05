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
            'name'=>'Angelo Thomas',
            'email'=>'admin@admin.com',
            'password'=>password_hash('admin', PASSWORD_BCRYPT),
            'role_as'=>'admin'
        ]);
    }
}
