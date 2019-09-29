<?php

use Illuminate\Database\Seeder;

class RoomsEquipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = \App\Room::find(1);
        $room->equipments()->attach(1);
        $room->equipments()->attach(2);
        $room->equipments()->attach(3);
        $room->equipments()->attach(4);
        $room = \App\Room::find(2);
        $room->equipments()->attach(1);
        $room->equipments()->attach(2);
        $room->equipments()->attach(3);
    }
}
