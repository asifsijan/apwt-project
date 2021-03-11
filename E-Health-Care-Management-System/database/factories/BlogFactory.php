<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Blog::class, function (Faker $faker) {
    return [
    	'doctor_id' => $faker->unique()->randomDigit,
        'blog_name' => $faker->name,
        'blog_details' => $faker->text
    ];
});
