<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert([
            'image' => '/img/house1.png',
            'houseowner_id' => 1,
        ]);

        DB::table('houses')->insert([
            'image' => '/img/house2.png',
            'houseowner_id' => 2,
        ]);
    }
}
