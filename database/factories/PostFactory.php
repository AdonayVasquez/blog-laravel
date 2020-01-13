<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titulo' => $faker->JobTitle,
        'contenido' => $faker->paragraph,
        'image_url' => $faker->url,
        'userid' => $faker->randomDigitNotNull,
    ];
});
