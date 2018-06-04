<?php

use App\Model\Employee;
use Faker\Generator as Faker;

$factory->define(App\Model\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
    ];
});
