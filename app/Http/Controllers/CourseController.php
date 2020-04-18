<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Course;
use App\Models\MyCourse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchCourse()->get();

        $course_rank = Course::all()->sortByDesc('star_sum');

        return view('courses.index', compact('courses', 'course_rank'));
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

        $total_time = substr($course->lessons->sum('lesson_time'), 0, 1) . ':' . substr($course->lessons->sum('lesson_time'), 1, 2) . ':' . substr($course->lessons->sum('lesson_time'), -2);

        return view('courses.show', compact('course', 'is_cart_or_sold', 'is_added_disable', 'total_time'));
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
