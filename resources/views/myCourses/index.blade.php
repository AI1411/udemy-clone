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
                            <li class="breadcrumb-item"><a href="#">マイコース</a></li>
                        </ol>
                    </nav>
                    <h1 class="page-title">マイコース</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-list-area">
        <div class="container">
            @if($my_courses->count() > 0)
                @include('layouts.message')
                <div class="row" id="cart_items_details">
                    <div class="col-lg-9">
                        <div class="in-cart-box">
                            <div class="title">{{ $carts->count() }}件の購入済みのコースがあります</div>
                            <div class="">
                                <ul class="cart-course-list">
                                    @foreach ($my_courses as $my_course)
                                        <li>
                                            <div class="cart-course-wrapper">
                                                <div class="image">
                                                    <a href="{{ route('courses.show', $my_course->course_id) }}">
                                                        <img src="{{ asset('images/learning.jpg') }}" alt=""
                                                             class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="details">
                                                    <a href="">
                                                        <div class="name">{{ $my_course->title }}</div>
                                                    </a>
                                                </div>
                                                <div class="move-remove">
                                                    <div>
{{--                                                        <form action="{{ route('removeFromCart', $cart->id) }}"--}}
{{--                                                              method="post">--}}
{{--                                                            @csrf--}}
{{--                                                            @method('DELETE')--}}
{{--                                                            <input type="hidden" value="{{ $cart->id }}">--}}
{{--                                                            <input type="submit" class="btn-success" value="Remove">--}}
{{--                                                        </form>--}}
                                                    </div>
                                                    <!-- <div>Move to Wishlist</div> -->
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="title">まだコースを購入していません</div>
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
