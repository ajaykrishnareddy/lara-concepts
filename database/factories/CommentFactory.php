<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->realText($faker->numberBetween(10,20)),
        'post_id' => factory(App\Post::class)->create()
    ];
});
