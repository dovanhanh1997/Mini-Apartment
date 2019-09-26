<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new Room();
        $room->contract_id = 1;
        $room->status = 'Active';
        $room->roomNumber = 101;
        $room->save();
        $room = new Room();
        $room->contract_id = 2;
        $room->status = 'Active';
        $room->roomNumber = 201;
        $room->save();
        $room = new Room();
        $room->contract_id = 3;
        $room->roomNumber = 202;
        $room->save();
        $room = new Room();
        $room->contract_id = 4;
        $room->roomNumber = 301;
        $room->save();
        $room = new Room();
        $room->contract_id = 5;
        $room->roomNumber = 302;
        $room->save();
        $room = new Room();
        $room->contract_id = 6;
        $room->roomNumber = 303;
        $room->save();
        $room = new Room();
        $room->contract_id = 7;
        $room->roomNumber = 304;
        $room->save();
        $room = new Room();
        $room->contract_id = 8;
        $room->roomNumber = 305;
        $room->save();
        $room = new Room();
        $room->contract_id = 9;
        $room->roomNumber = 306;
        $room->save();
    }
}
