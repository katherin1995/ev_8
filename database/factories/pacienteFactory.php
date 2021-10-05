<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\paciente;
use Faker\Generator as Faker;

$factory->define(paciente::class, function (Faker $faker) {

    return [
        'apell_nomb' => $faker->word,
        'dni' => $faker->randomDigitNotNull,
        'celular' => $faker->randomDigitNotNull
    ];
});
