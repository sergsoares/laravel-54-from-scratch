<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'post_id' => rand(0,10),
        'body' => $faker->sentence()
    ];
});
