<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Blog\Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'slug'=> \Illuminate\Support\Str::slug($faker->title),
        'is_active'=> 1
    ];
});
