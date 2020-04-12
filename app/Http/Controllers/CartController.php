<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        return view('carts.index');
    }

    public function addCart(Request $request)
    {
        $cart = new Cart();
        $cart->title = $request->title;
        $cart->is_sale = $request->is_sale;
        if ($cart->is_sale) {
            if ($cart->price * 0.1 <= 1200) {
                $cart->price = 1200;
            }
            $cart->price = $request->price * 0.1;
        } else {
            $cart->price = $request->price;
        }
        $cart->course_id = $request->course_id;
        $cart->user_id = $request->user_id;

        foreach (Cart::all() as $item) {
            if ($request->course_id == $item->course_id && $request->user_id == $item->user_id) {
                return redirect()->back()->with('error', 'すでにカートに追加しています');
            }
        }

        if ($request->input('cartFromFavorite') == 1) {
            $favorite = Favorite::find($request->favorite_id);
            $favorite->delete();
            $cart->save();

            return redirect()->back()->with('success', 'お気に入りからカートに追加しました');
        }

        $cart->save();

        return redirect()->back()->with('success', 'カートに追加しました');
    }

    public function removeFromCart(Cart $cart)
    {
        $cart->delete();

        return redirect()->back()->with('success', 'カートから削除しました');
    }
}
