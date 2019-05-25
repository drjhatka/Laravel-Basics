<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> rtrim( $faker->sentence(rand(6,10)) ),
        'body'=> $faker->paragraphs(rand(10,15))
    ];
});
