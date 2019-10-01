<?php

use Illuminate\Database\Seeder;

class HistoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $history = new \App\History();
        $history->service_id    = 1;
        $history->roomNumber = 101;
        $history->date = '2019-07-09';
        $history->diff = 200;
        $history->totalPrice = 80000;
        $history->save();
        $history = new \App\History();
        $history->service_id    = 1;
        $history->roomNumber = 101;
        $history->date = '2019-08-09';
        $history->diff = 300;
        $history->totalPrice = 120000;
        $history->save();
        $history = new \App\History();
        $history->service_id    = 1;
        $history->roomNumber = 201;
        $history->date = '2019-09-09';
        $history->diff = 100;
        $history->totalPrice = 40000;
        $history->save();
    }
}
