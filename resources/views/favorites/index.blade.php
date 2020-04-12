@extends('layouts.app')

@section('content')
    <section class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">お気に入りリスト</a></li>
                        </ol>
                    </nav>
                    <h1 class="page-title">お気に入りリスト</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-list-area">
        <div class="container">
            @include('layouts.message')
            @if($favorites->count() > 0)
                <div class="row" id="cart_items_details">
                    <div class="col-lg-9">
                        <div class="in-cart-box">
                            <div class="title">お気に入りの中に{{ $favorites->count() }}個のコースがあります</div>
                            <div class="">
                                <ul class="cart-course-list">
                                    @foreach ($favorites as $favorite)
                                        <li>
                                            <div class="cart-course-wrapper">
                                                <div class="image">
                                                    <a href="{{ route('courses.show', $favorite->id) }}">
                                                        <img src="{{ asset('images/learning.jpg') }}" alt=""
                                                             class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="details">
                                                    <a href="">
                                                        <div class="name">{{ $favorite->title }}</div>
                                                    </a>
                                                </div>
                                                <div class="move-remove">
                                                    <div>
                                                        <form action="{{ route('removeFromFavorite', $favorite->id) }}"
                                                              method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" value="{{ $favorite->id }}">
                                                            <input type="submit" class="btn-danger" value="Remove" onclick="return confirm('削除してもよろしいですか?')">
                                                        </form>
                                                    </div>
                                                    <div>
                                                        <form action="{{ route('addCart', $favorite->id) }}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="cartFromFavorite" value="1">
                                                            <input type="hidden" name="favorite_id" value="{{ $favorite->id }}">
                                                            <input type="hidden" name="course_id" value="{{ $favorite->id }}">
                                                            <input type="hidden" name="user_id"
                                                                   value="{{ auth()->user()->id }}">
                                                            <input type="hidden" name="title" value="{{ $favorite->title }}">
                                                            <input type="hidden" name="price" value="{{ $favorite->price }}">
                                                            <input type="hidden" name="is_sale" value="{{ $favorite->is_sale }}">
                                                            <input type="submit" class="btn-success" value="AddCart" onclick="return confirm('カートに追加してもよろしいですか?')">
                                                        </form>
                                                    </div>
                                                    <!-- <div>Move to Wishlist</div> -->
                                                </div>
                                                <div class="price">
                                                    <a href="">
                                                        <div class="current-price">
                                                            ¥{{ $favorite->price }}
                                                        </div>
                                                        <span class="coupon-tag">
                                                        <i class="fas fa-tag"></i>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cart-sidebar">
                            <div class="total">合計:</div>
                            <div class="total-price">
                                ¥<span id="total_price_of_checking_out">{{ $total_favorites_price }}</span>
                            </div>
{{--                            <button type="button" class="btn btn-primary btn-block checkout-btn"--}}
{{--                                    onclick="handleCheckOut()">チェックアウト--}}
{{--                            </button>--}}
                        </div>
                    </div>
                </div>
            @else
                <div class="title">お気に入りに登録されていません</div>
            @endif
        </div>
    </section>

    <script>
        function handleCheckOut() {
            $.ajax({
                url: '/auth/check',
                success: function (res) {
                    console.log(res);
                    if (!res.success) {
                        $('#signInModal').modal('show');
                    } else {
                        $('#paymentModal').modal('show');
                        $('.total_price_of_checking_out').val($('#total_price_of_checking_out').text());
                    }
                }
            });
        }
    </script>
@endsection
