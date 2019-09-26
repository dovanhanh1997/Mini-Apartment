<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contract;
use Faker\Generator as Faker;

$factory->define(Contract::class, function (Faker $faker) {
    return [
        'contractPeriod' => rand(1,2),
        'outOfDate' => rand(2019,2025).'-'.rand(1,12).'-'.rand(1,30),
        'contractRoom' => rand(1,9).'0'.rand(1,6),
    ];
});
