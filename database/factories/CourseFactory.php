<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $categories_count = Category::all()->count();
    return [
        'id' => $faker->uuid,
        'title' => $faker->sentence(4),
        'short_description' => $faker->realText(100),
        'description' => $faker->realText(),
        'outcomes' => $faker->text(5),
        'section' => $faker->text(10),
        'requirements' => 'PHP Laravel',
        'price' => random_int(50, 240) . '00',
        'level' => random_int(1, 3),
        'thumbnail' => null,
        'video_url' => null,
        'visibility' => true,
        'is_sale' => $faker->boolean,
        'category_id' => random_int(1,$categories_count)
    ];
});
