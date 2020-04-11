<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $cart = new Cart();
        $cart->title = $request->title;
        $cart->price = $request->price;
        $cart->course_id = $request->course_id;
        $cart->user_id = $request->user_id;

        $cart->save();

        return redirect()->back()->with('success', 'カートに追加しました');
    }
}
