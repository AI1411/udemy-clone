<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        dd(Auth::id());
        return view('carts.index');
    }

    public function addCart(Request $request)
    {
        $cart = new Cart();
        $cart->title = $request->title;
        $cart->price = $request->price;
        $cart->course_id = $request->course_id;
        $cart->user_id = $request->user_id;

        foreach (Cart::all() as $item) {
            if ($request->course_id == $item->course_id && $request->user_id == $item->user_id) {
                return redirect()->back()->with('error', 'すでにカートに追加しています');
            }
        }

        $cart->save();

        return redirect()->back()->with('success', 'カートに追加しました');
    }
}
