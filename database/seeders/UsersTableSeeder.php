<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();
        // generate  3  users table 
        \DB::table('users')->insert([
            [
                'name' => " jhon Doe",
                'email' => "johdfa@gmail.com",
                'password' => bcrypt('secret')

            ],

            [
                'name' => "Main Doe",
                'email' => "Amin@gmail.com",
                'password' => bcrypt('secret')

            ],
            [
                'name' => " himu Doe",
                'email' => "himu@gmail.com",
                'password' => bcrypt('secret')

            ],
        ]);
    }
}
