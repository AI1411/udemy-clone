<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MyCourse;
use Illuminate\Http\Request;

class MyCourseController extends Controller
{
    public function checkout(Request $request)
    {
        $carts = Cart::all();
        foreach ($carts as $cart) {
            $my_course = new MyCourse();
            $my_course->user_id = $cart->user_id;
            $my_course->course_id = $cart->course_id;
            $my_course->save();
            $cart->delete();
        }

        return redirect()->route('courses.index')->with('success', 'コースを購入しました');
    }
}
