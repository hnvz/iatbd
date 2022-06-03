<?php

namespace Database\Seeders;

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
        $this->call([
            ImagesTableSeeder::class,
            RolesTableSeeder::class,
            PetTypeTableSeeder::class,
            UsersTableSeeder::class,
            PetsTableSeeder::class,
            HousesTableSeeder::class,
        ]);
    }
}
