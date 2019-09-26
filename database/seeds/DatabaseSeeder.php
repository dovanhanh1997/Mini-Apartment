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
        $this->call([
            ContractsTableSeeder::class,
            RoomsTableSeeder::class,
            UsersTableSeeder::class,
            StudentsTableSeeder::class,
//            ProfilesTableSeeder::class,
//            VehiclesTableSeeder::class,
        ]);
    }
}
