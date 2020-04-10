<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchCourse()->get();

        return view('home', compact('courses'));
    }
}
