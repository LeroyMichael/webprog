<?php

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
            'email' => 'admin@flowelto.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@flowelto.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
        ]);
    }
}
