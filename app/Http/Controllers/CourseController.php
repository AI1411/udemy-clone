<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchCourse()->get();

        return view('courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        $is_cart = $this->isCartAdded($course) ? 'Cart Added' : 'Add to cart';

        $is_added_disable = $this->isCartAdded($course) ? 'disabled' : '';

        return view('courses.show', compact('course', 'is_cart', 'is_added_disable'));
    }

    public function isCartAdded(Course $course)
    {
        foreach (Cart::all() as $cart) {
            if ($cart->course_id == $course->id && $cart->user_id == auth()->user()->id) {
                return true;
            }
            return false;
        }
    }
}
