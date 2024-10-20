<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'image' => null,
                'phone' => '6303535524',
                'membership' => 'premium',
                'credits' => 1000,
                'role' => 'superadmin',
                'status' => 'active',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Sadmin@123$'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sandeep',
                'username' => 'sandeep',
                'image' => null, 
                'phone' => '9742763459', 
                'membership' => 'free', 
                'credits' => 500, 
                'role' => 'user',
                'status' => 'active',
                'email' => 'sandeep@schronix.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Sandeep@123$'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kutti',
                'username' => 'kutti',
                'image' => null, 
                'phone' => '9959363983', 
                'membership' => 'free',
                'credits' => 500, 
                'role' => 'user',
                'status' => 'active',
                'email' => 'kutti@schronix.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Kutti@123$'), 
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
