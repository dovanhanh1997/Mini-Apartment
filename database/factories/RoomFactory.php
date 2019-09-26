<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'roomNumber' => rand(1,6).'0'.rand(1,9),
        'roomSize' => rand(19,25),
    ];
});
