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
        'shop_id' => null,
        'image_url' => "https://ramcotubular.com/wp-content/uploads/default-avatar.jpg",
    ];
});
