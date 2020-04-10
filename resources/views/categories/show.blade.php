@extends('layouts.app')

@section('content')
    <section class="category-header-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    {{ $category->title }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <h3 class="category-name">
                        {{ $category->title }}
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="category-course-list-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="category-filter-box filter-box clearfix">
                        <a href="" class="btn btn-outline-secondary all-btn">All</a>

                        <div class="btn-group category-list">
                            <a class="btn btn-outline-secondary dropdown-toggle" href="#" data-toggle="dropdown">
                                Category List
                            </a>
                            <div class="dropdown-menu">
                                @foreach($categories as $category)
                                    <a class="dropdown-item" href="{{ route('categories.show', $category->slug) }}">
                                        {{ $category->title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="category-course-list">
                        <ul>
                            @foreach($courses as $course)
                                <li>
                                    <div class="course-box-2">
                                        <div class="course-image">
                                            <a href="">
                                                <img src="{{ asset('images/learning.jpg') }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="course-details">
                                            <a href="" class="course-title">{{ $course->title }}</a>
                                            <a href="" class="course-instructor">
                                            <span class="instructor-name">akira</span>
                                            -
                                            </a>
                                            <div class="course-subtitle">
                                                {{ $course->short_description }}
                                            </div>
                                            <div class="course-meta">
                                                <span class="">
                                                    <i class="fas fa-play-circle"></i>
                                                    110 Lessons
                                                </span>
                                                <span class="">
                                                    <i class="far fa-clock"></i>
                                                    3 hours
                                                </span>
                                            </div>
                                        </div>
                                        <div class="course-price-rating">
                                            <div class="course-price">
                                                <span class="current-price">{{ $course->price }}</span>
                                                {{--<span class="original-price">$300</span>--}}
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <div class="rating-number">
                                                5 Ratings
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <nav>
                        {{--pagination--}}
{{--                        {{ $courses_by_category->links() }}--}}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
