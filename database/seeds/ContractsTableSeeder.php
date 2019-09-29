<?php

use App\Contract;
use Illuminate\Database\Seeder;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contract = new Contract();
        $contract->outOfDate = '2020-08-09';
        $contract->contractStatus = 'Active';
        $contract->save();
        $contract = new Contract();
        $contract->outOfDate = '2020-08-09';
        $contract->contractStatus = 'Active';
        $contract->save();
        $contract = new Contract();
        $contract->save();
        $contract = new Contract();
        $contract->save();
        $contract = new Contract();
        $contract->save();
        $contract = new Contract();
        $contract->save();
        $contract = new Contract();
        $contract->save();
        $contract = new Contract();
        $contract->save();
        $contract = new Contract();
        $contract->save();
    }
}
