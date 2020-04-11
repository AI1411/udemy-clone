<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            $categories = Category::all();
            $total_price = $carts->sum('price');

            //...with this variable
            $view->with([
                'carts' => $carts,
                'categories' => $categories,
                'total_price' => $total_price
                ]);
        });
//        View::share(compact('categories', 'carts', 'total_price'));
    }
}
