<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use App\Models\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    $course_count = Course::all()->count();
    return [
        'name' => $faker->text,
        'course_id' => random_int(1, $course_count),
    ];
});
