<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'post_id' => rand(0,10),
        'user_id' => 1,
        'body' => $faker->sentence()
    ];
});
