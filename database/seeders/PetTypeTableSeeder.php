<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_type')->insert([
            'type' => 'Dog'
        ]);

        DB::table('pet_type')->insert([
            'type' => 'Cat'
        ]);

        DB::table('pet_type')->insert([
            'type' => 'Bird'
        ]);

        DB::table('pet_type')->insert([
            'type' => 'Rabbit'
        ]);
    }
}
