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
            UsersTableSeeder::class,
            ContractsTableSeeder::class,
            RoomsTableSeeder::class,
            StudentsTableSeeder::class,
            ProfilesTableSeeder::class,
            ServicesTableSeeder::class,
            RoomsServicesTableSeeder::class,
            ElectricsTabelSeeder::class,
            EquipmentsSeeder::class,
            RoomsEquipmentsSeeder::class,
            HistoriesSeeder::class,
//            VehiclesTableSeeder::class,
        ]);
    }
}
