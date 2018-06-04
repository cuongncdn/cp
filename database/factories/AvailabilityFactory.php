<?php

use App\Model\Availability;
use App\Model\Employee;
use Faker\Generator as Faker;

$factory->define(App\Model\Availability::class, function (Faker $faker) {
    return [
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'time' => $faker->time($format = 'H:i'),
        'employee_id' => function () {
            return Employee::all()->random();
        },
    ];
});
