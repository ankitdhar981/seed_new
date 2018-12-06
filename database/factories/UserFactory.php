<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'salary' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'), // secret
        
    ];
});
