<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Shop;
use App\Manager;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->word(10),
        'image_url' => 'https://www.stop-shop.com/images/module/9188.jpg',
        'manager_id' => $faker->unique()->randomElement(Manager::pluck('id', 'id')->toArray()),
    ];
});
