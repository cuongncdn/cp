<?php

use App\Model\Client;
use Faker\Generator as Faker;

$factory->define(App\Model\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
    ];
});
