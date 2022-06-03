<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'name' => 'Peer',
            'type' => 'Cat',
            'startdate' => '2022-10-20',
            'enddate' => '2022-10-22',
            'hourly_rate' => 9,
            'description' => 'A cat',
            'image' => "/img/peer2.png",
            'available' => true,
            'owner_id' => 1,
        ]);


        DB::table('pets')->insert([
            'name' => 'Silver',
            'type' => 'Cat',
            'startdate' => '2022-10-20',
            'enddate' => '2022-10-22',
            'hourly_rate' => 12,
            'description' => 'A white cat. A bit annoying',
            'image' => "/img/silver.png",
            'available' => true,
            'owner_id' => 2,
        ]);

        DB::table('pets')->insert([
            'name' => 'Duck',
            'type' => 'Bird',
            'startdate' => '2022-6-3',
            'enddate' => '2022-6-7',
            'hourly_rate' => 1,
            'description' => 'Very cool bird',
            'image' => "/img/bird.png",
            'available' => true,
            'owner_id' => 1,
        ]);

        DB::table('pets')->insert([
            'name' => 'Nijntje',
            'type' => 'Rabbit',
            'startdate' => '2022-4-3',
            'enddate' => '2022-9-6',
            'hourly_rate' => 1,
            'description' => 'Cool rabbit',
            'image' => "/img/rabbit.png",
            'available' => true,
            'owner_id' => 2,
        ]);

    }
}
