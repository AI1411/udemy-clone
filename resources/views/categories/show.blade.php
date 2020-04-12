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

    <section class="ml-5">
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
    </section>

    <section class="category-course-list-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <form action="" method="get">
                        <h5 class="font-weight-normal">レベル</h5>
                        <div class="form-check mt-1">
                            <input name="level_search" class="form-check-input" type="radio" value="0"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                すべてのレベル
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="level_search" class="form-check-input" type="radio" value="1"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                初級
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="level_search" class="form-check-input" type="radio" value="2"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                中級
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="level_search" class="form-check-input" type="radio" value="3"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                上級
                            </label>
                        </div>
                        <hr>

                        <h5 class="font-weight-normal">価格</h5>
                        <div class="form-check mt-1">
                            <input name="price_search" class="form-check-input" type="radio" value="20000"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                20000円以上
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="price_search" class="form-check-input" type="radio" value="15000"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                15000円以上
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="price_search" class="form-check-input" type="radio" value="10000"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                10000円以上
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="price_search" class="form-check-input" type="radio" value="5000"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                5000円以上
                            </label>
                        </div>
                        <hr>

                        <h5 class="font-weight-normal">レビュー</h5>
                        <div class="form-check mt-1">
                            <input name="star_count" class="form-check-input" type="radio" value="4" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">4以上</span>
                                </div>
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="star_count" class="form-check-input" type="radio" value="3" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">3以上</span>
                                </div>
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="star_count" class="form-check-input" type="radio" value="2" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">2以上</span>
                                </div>
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="star_count" class="form-check-input" type="radio" value="1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">1以上</span>
                                </div>
                            </label>
                        </div>
                        <hr>

                        <h5 class="font-weight-normal">レッスン数</h5>
                        <div class="form-check mt-1">
                            <input name="lesson_count" class="form-check-input" type="radio" value="40"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                40以上
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="lesson_count" class="form-check-input" type="radio" value="30"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                30以上
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="lesson_count" class="form-check-input" type="radio" value="20"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                20以上
                            </label>
                        </div>
                        <div class="form-check mt-1">
                            <input name="lesson_count" class="form-check-input" type="radio" value="10"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                10以上
                            </label>
                        </div>
                        <hr>

                        <div class="form-check mt-1">
                            <input name="is_sale" class="form-check-input" type="checkbox" value="1"
                                   id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                セール中
                            </label>
                        </div>
                        <hr>

                        <button type="submit" class="btn btn-primary btn-block">検索</button>
                    </form>
                </div>
                <div class="col-md-9">
                    @if($courses->count() > 0)
                        <div class="category-course-list">
                            <ul>
                                @foreach($courses as $course)
                                    <li>
                                        <div class="course-box-2">
                                            <div class="course-image">
                                                <a href="{{ route('courses.show', $course->id) }}">
                                                    <img src="{{ asset('images/learning.jpg') }}" alt=""
                                                         class="img-fluid">
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
                                                    {{ $course->lesson_count }} Lessons
                                                </span>
                                                    <span class="">
                                                    <i class="far fa-clock"></i>
                                                    3 hours
                                                </span>
                                                    <span class="">
                                                    <i class="fas fa-closed-captioning"></i> {{ config('const.level')[$course->level] }}
                                                </span>
                                                </div>
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
                                                <div class="rating">
                                                     <span class="d-inline-block average-rating" style="color: red">
                                                        {{ $course->reviews->count() > 0 ? round($course->star_count,1) : 0 }}
                                                    </span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    ({{ $course->reviews->count() > 0 ? $course->reviews->count() : 0 }}
                                                    )
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        コースが見つかりません
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
