<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchCourse()->get();
//        $categories = Category::all();

        return view('home', compact('courses'));
    }
}
