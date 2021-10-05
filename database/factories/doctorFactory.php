<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\doctor;
use Faker\Generator as Faker;

$factory->define(doctor::class, function (Faker $faker) {

    return [
        'ape_nombr' => $faker->word,
        'dni' => $faker->randomDigitNotNull,
        'especialidad' => $faker->word
    ];
});
