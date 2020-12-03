<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users)->insert([
        //     ['name' => 'Admin'],
        //     ['email' => 'admin@gmail.com'],
        //     ['phone' => '0347650077'],
        //     ['role' => '1'],
        // ]);

        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => '123456789',
        //     'role' => 1,
        // ]);
        
        DB::table('users')->insert([
            'name' => 'nguyen tat thanh',
            'email' => 'admin1@gmail.com',
            'phone' => '0347650077',
            'password' => '123456789',
            'role' =>'1',
        ]);
    }
}
