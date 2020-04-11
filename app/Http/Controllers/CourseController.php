<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchCourse()->get();

        return view('home', compact('courses'));
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
}
