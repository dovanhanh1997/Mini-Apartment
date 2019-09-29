<?php

use Illuminate\Database\Seeder;

class EquipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipment = new \App\Equipment();
        $equipment->equipName ='Bed';
        $equipment->equipAmount = 1;
        $equipment->save();
        $equipment = new \App\Equipment();
        $equipment->equipName ='Water tap';
        $equipment->equipAmount = 3;
        $equipment->save();
        $equipment = new \App\Equipment();
        $equipment->equipName ='Shower';
        $equipment->equipAmount = 1;
        $equipment->save();
        $equipment = new \App\Equipment();
        $equipment->equipName ='Electric water';
        $equipment->equipAmount = 1;
        $equipment->save();
        $equipment = new \App\Equipment();
        $equipment->equipName ='Air Conditioner';
        $equipment->equipAmount = 1;
        $equipment->save();
    }
}
