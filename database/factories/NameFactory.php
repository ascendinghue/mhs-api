<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Models\Name;
use Faker\Generator as Faker;


$factory->define(Name::class, function (Faker $faker) {
    return [
        'family_name' => $faker->lastName,
        'given_name' => $faker->firstName,
        'date_of_birth' => '1968-04-23'
    ];
});
