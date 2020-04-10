<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->searchCourse()->get();

        return view('home', compact('courses'));
    }
}
