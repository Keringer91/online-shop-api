<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Manager;
use Faker\Generator as Faker;

$factory->define(Manager::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => Str::random(7).'@gmail.com',
        'image_url' => $faker->url,
    ];
});
