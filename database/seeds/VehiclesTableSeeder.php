<?php

use App\Vehicle;
use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle = new Vehicle();
        $vehicle->student_id = 1;
        $vehicle->vehicleName = 'Dream';
        $vehicle->vehicleType = 'Honda';
        $vehicle->vehicleNumber = '29T8 1639';
        $vehicle->save();

        $vehicle = new Vehicle();
        $vehicle->student_id = 1;
        $vehicle->vehicleName = 'Airblade';
        $vehicle->vehicleType = 'Honda';
        $vehicle->vehicleNumber = '29A1 2776';
        $vehicle->save();
    }
}
