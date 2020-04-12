<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::all();

        $total_favorites_price = $favorites->sum('price');

        return view('favorites.index', compact('favorites', 'total_favorites_price'));
    }

    public function addFavorite(Request $request)
    {
        $favorite = new Favorite();
        $favorite->title = $request->title;
        $favorite->price = $request->price;
        $favorite->course_id = $request->course_id;
        $favorite->user_id = $request->user_id;
        $favorite->is_sale = $request->is_sale;

        $favorite->save();

        return redirect()->back()->with('success', 'お気に入りに追加しました');
    }

//    public function addCartFromFavorite(Favorite $favorite)
//    {
//
//    }

    public function removeFromFavorite(Favorite $favorite)
    {
        $favorite->delete();

        return redirect()->back()->with('success', 'お気に入りから削除しました');
    }
}
