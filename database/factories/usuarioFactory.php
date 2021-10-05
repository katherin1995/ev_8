<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\usuario;
use Faker\Generator as Faker;

$factory->define(usuario::class, function (Faker $faker) {

    return [
        'apellido_nombre' => $faker->word,
        'usuario' => $faker->word,
        'password' => $faker->word
    ];
});
