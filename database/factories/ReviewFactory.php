<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use App\Models\Review;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    $user_count = User::all()->count();
    $course_count = Course::all()->count();
    return [
        'title' => $faker->text,
        'body' => $faker->sentence(5),
        'star' => random_int(1, 5),
        'user_id' => random_int(1, $user_count),
        'course_id' => random_int(1,$course_count)
    ];
});
