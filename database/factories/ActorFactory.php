<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Actor;

$factory->define(Actor::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> name,
        'surname' => $faker -> lastname,
        'birth_year' => $faker -> year
    ];
});