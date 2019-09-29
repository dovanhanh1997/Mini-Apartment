<?php

use Illuminate\Database\Seeder;

class ElectricsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $electric = new \App\Electric();
        $electric->status = 'active';
        $electric->roomNumber = 101;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1200;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('Y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 201;
        $electric->status = 'active';
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1100;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('Y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 202;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1000;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('Y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 301;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1000;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('Y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 302;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1000;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 303;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1000;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 304;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1000;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 305;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1000;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('y-m-d');

        $electric->save();
        $electric = new \App\Electric();
        $electric->roomNumber = 306;
        $electric->previousMonth = 1000;
        $electric->currentMonth = 1000;
        $electric->diff = intval($electric->currentMonth - $electric->previousMonth);
        $electric->totalPrice = intval(4000 * $electric->diff);
        $electric->updated_at = date('y-m-d');

        $electric->save();
    }
}
