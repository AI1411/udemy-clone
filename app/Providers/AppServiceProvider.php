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
        view()->composer('*', function ($view) {
            if (Auth::id()) {
                $carts = Cart::where('user_id', Auth::user()->id)->get();
                $total_price = $carts->sum('price');

                $view->with([
                    'carts' => $carts,
                    'total_price' => $total_price
                    ]);
            }
            $categories = Category::all();

            //...with this variable
            $view->with([
                'categories' => $categories,
            ]);
        });
    }
}
