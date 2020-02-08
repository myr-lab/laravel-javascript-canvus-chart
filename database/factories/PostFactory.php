<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
       'title' => $faker->word,
       'body' => $faker->text,
       'like' => $faker->numberBetween(100,300),
       'user_id' => random_int(1,2)
    ];
});
