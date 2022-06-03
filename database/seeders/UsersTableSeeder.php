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
        DB::table('users')->insert([
            'name' => "Jan",
            'email' => "jan@mail.nl",
            'password' => bcrypt('laravel'),
            'location' => "Zuid-Holland",
            'age' => 20,
            'role' => "Guest"
        ]);

        DB::table('users')->insert([
            'name' => "Henk",
            'email' => "henk@mail.nl",
            'password' => bcrypt('laravel'),
            'location' => "Noord-Holland",
            'age' => 21,
            'role' => "Guest"
        ]);

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "Admin@mail.nl",
            'password' => bcrypt('laravel'),
            'location' => "Groningen",
            'age' => 30,
            'role' => "Admin"
        ]);
    }
}
