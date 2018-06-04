<?php

use App\Model\Appointment;
use App\Model\Employee;
use App\Model\Client;
use Faker\Generator as Faker;

$factory->define(App\Model\Appointment::class, function (Faker $faker) {
    return [
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'time' => $faker->time($format = 'H:i'),
        'status' => function () {
            $random = rand(0,1);
            if ($random == 0) {
                return 'pending';
            } else {
                return 'confirmed';
            }
        },
        'employee_id' => function () {
            return Employee::all()->random();
        },
        'client_id' => function () {
            return Client::all()->random();
        },
    ];
});
