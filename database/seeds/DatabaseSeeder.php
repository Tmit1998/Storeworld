<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'nguyen tat thanh',
            'email' => 'admin@gmail.com',
            'phone' => '0347650077',
            'password' => Hash::make('12345678'),
            'role' =>'0',
        ]);
    }
}
