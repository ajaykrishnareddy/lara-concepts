<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($faker->numberBetween(10,20)),
        'body'  => $faker->realText($faker->numberBetween(10,20))
    ];
});
