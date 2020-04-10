<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $text = $faker->sentence(2);
    return [
        'title' => $text,
        'slug' => Str::slug($text),
    ];
});
