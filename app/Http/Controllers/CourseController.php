<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Course;
use App\Models\MyCourse;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchCourse()->get();

        return view('courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        if ($this->isCartAdded($course)) {
            $is_cart_or_sold = 'すでにカートにあります';
        } elseif ($this->isSold($course)) {
            $is_cart_or_sold = 'すでに購入しています';
        } else {
            $is_cart_or_sold = 'カートに入れる';
        }
        $is_added_disable = $this->isCartAdded($course) || $this->isSold($course) ? 'disabled' : '';

        return view('courses.show', compact('course', 'is_cart_or_sold', 'is_added_disable'));
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

    public function isSold(Course $course)
    {
        foreach (MyCourse::all() as $myCourse) {
            if ($myCourse->course_id == $course->id && $myCourse->user_id == auth()->user()->id) {
                return true;
            }
            return false;
        }
    }
}
