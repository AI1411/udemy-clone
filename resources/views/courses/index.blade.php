@extends('layouts.app')

@section('content')
    <section class="home-banner-area" style="background-image: url({{ asset('images/learning.jpg') }})">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <div class="home-banner-wrap">
                        <h2>Best place for learning</h2>
                        <p>Learn from any topic, choose from category</p>
                        <form class="" action=""
                              method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search_course"
                                       placeholder="お好きなコースを検索できます">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-fact-area">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fas fa-bullseye float-left"></i>
                        <div class="text-box">
                            <h4>{{ $courses->count() }} online_courses</h4>
                            <p>Explore A Variety Of Fresh Topics</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-check float-left"></i>
                        <div class="text-box">
                            <h4>Expert Instruction</h4>
                            <p>Find The Right Course For You</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-clock float-left"></i>
                        <div class="text-box">
                            <h4>Lifetime Access</h4>
                            <p>Learn On Your Schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg">
            @include('layouts.message')
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">Top Courses</h2>
                    <div class="course-carousel">
                        @foreach ($courses as $course)
                            <div class="course-box-wrap">
                                <a href=""
                                   class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img src="" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title">{{ $course->title }}</h5>
                                            <p class="instructors">{{ $course->short_description }}</p>
                                            <div class="rating">
                                                     <span class="d-inline-block average-rating" style="color: red">
                                                        {{ $course->reviews->count() > 0 ? round($course->reviews->avg('star'), 1) : 0 }}
                                                    </span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <div class="course-price">
                                                @if($course->is_sale)
                                                    <span
                                                        class="current-price">¥{{ $course->price * 0.1 <= 1200 ? 1200 : $course->price * 0.1 }}</span>
                                                    <span class="original-price">¥{{ $course->price }}</span>
                                                @else
                                                    <span class="">¥{{ $course->price }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">

                                        <div class="course-title">
                                            <a href="">{{ $course->title }}</a>
                                        </div>
                                        <div class="course-category">
                                            <span class="course-badge best-seller">Best seller</span>
                                            in
                                            <a href="">PHP</a>
                                        </div>
                                        <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                             Lessons
                                        </span>
                                            <span class=""><i class="far fa-clock"></i>
                                            2 Hours
                                        </span>
                                        </div>
                                        <div class="course-subtitle">{{ $course->short_description }}</div>
                                        <div class="what-will-learn">
                                            <ul>
                                                {{ $course->outcomes }}
                                            </ul>
                                        </div>
                                        <div class="course-price-rating">
                                            <div class="course-price">
                                                @if($course->is_sale)
                                                    <span
                                                        class="current-price" style="color: red">¥{{ $course->price * 0.1 <= 1200 ? 1200 : $course->price * 0.1 }}</span>
                                                @else
                                                    <span class="">¥{{ $course->price }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="popover-btns">
                                            {{--                                            @if(auth()->check() && \App\Enroll::whereCourseId($course->id)->first() !== null)--}}
                                            {{--                                                <div class="purchased">--}}
                                            {{--                                                    <a href="#">Already purchased</a>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            @elseif(Cart::get($course->id) !== null)--}}
                                            {{--                                                <button type="button"--}}
                                            {{--                                                        class="btn add-to-cart-btn addedToCart big-cart-button-1"--}}
                                            {{--                                                        id="1">--}}
                                            {{--                                                    Added To Cart--}}
                                            {{--                                                </button>--}}
                                            {{--                                            @else--}}
                                            @auth
                                                <form action="{{ route('addCart', $course->id) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                                    <input type="hidden" name="user_id"
                                                           value="{{ auth()->user()->id }}">
                                                    <input type="hidden" name="title" value="{{ $course->title }}">
                                                    <input type="hidden" name="price" value="{{ $course->price }}">
                                                    <input type="hidden" name="is_sale" value="{{ $course->is_sale }}">
                                                    <button type="submit"
                                                            class="btn add-to-cart-btn addedToCart big-cart-button-1"
                                                            id="1">
                                                        Add To Cart
                                                    </button>
                                                </form>
                                                <form action="" method="post">
                                                    @csrf
                                                    <button type="button"
                                                            class="wishlist-btn"
                                                            title="Add to wishlist"
                                                            id="1"><i class="fas fa-heart"></i>
                                                    </button>
                                                </form>
                                                {{--                                            @endif--}}
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection