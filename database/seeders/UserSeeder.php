<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'admin',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'data',
            'email' => 'data@example.com',
            'username' => 'data',
            'password' => Hash::make('1234'),
        ]);
    }
}
