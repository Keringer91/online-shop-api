<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Shop;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text(30),
        'user_id' => $faker->randomElement(User::pluck('id', 'id')->toArray()),
        'shop_id' => 1
    ];
});
