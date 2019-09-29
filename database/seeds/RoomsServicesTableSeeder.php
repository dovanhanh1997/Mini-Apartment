<?php

use Illuminate\Database\Seeder;

class RoomsServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = \App\Room::find(1);
        $room->services()->attach(1);
        $room->services()->attach(2);
        $room->services()->attach(3);
        $room->services()->attach(4);
        $room = \App\Room::find(2);
        $room->services()->attach(1);
        $room->services()->attach(2);
        $room->services()->attach(3);
        $room->services()->attach(5);
    }
}
