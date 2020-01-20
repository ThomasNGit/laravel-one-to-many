<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Movie;

$factory->define(Movie::class, function (Faker $faker) {
    return [

        'title' => $faker -> name,
        'plot' => $faker -> sentence,
        'release_date' => $faker -> date
    ];
});

