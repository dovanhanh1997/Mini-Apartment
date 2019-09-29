<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new \App\Service();
        $service->serviceName = 'Electric';
        $service->unit = '1kW';
        $service->serviceStatus = 'Active';
        $service->servicePrice = 4000;
        $service->serviceSupplier = 'STATE POWER';
        $service->save();
        $service = new \App\Service();
        $service->serviceName = 'Water';
        $service->unit = '1m3';
        $service->serviceStatus = 'Active';
        $service->servicePrice = 15000;
        $service->serviceSupplier = 'TAP WATER STATE';
        $service->save();
        $service = new \App\Service();
        $service->serviceName = 'Garbage';
        $service->unit = 'Person';
        $service->serviceStatus = 'Active';
        $service->servicePrice = 36000;
        $service->serviceSupplier = 'ENVIRONMENT STATE';
        $service->save();
        $service = new \App\Service();
        $service->serviceName = 'Internet';
        $service->unit = 'Person';
        $service->serviceStatus = 'Active';
        $service->servicePrice = 100000;
        $service->serviceSupplier = 'FPT';
        $service->save();
        $service = new \App\Service();
        $service->serviceName = 'Vehicle';
        $service->unit = 'scooter';
        $service->serviceStatus = 'Active';
        $service->servicePrice = 100000;
        $service->serviceSupplier = 'HOST';
        $service->save();
    }
}
