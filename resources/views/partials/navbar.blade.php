<section class="menu-area">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/">
                        Udemy
                    </a>
                    @include('partials.menu')
                    <form class="inline-form" action=""
                          method="get" style="width: 100%;">
                        <div class="input-group search-box mobile-search">
                            <input type="text" name='search_course' class="form-control"
                                   placeholder="コースを検索できます">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                    @auth
                        <div class="cart-box menu-icon-box" id="cart_items">
                            @include('partials.cart')
                        </div>
                    @endauth
                    @auth
                        <div class="user-box menu-icon-box">
                            <div class="icon">
                                <a href="">
                                    <img src="{{ asset('images/avatar.png') }}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="dropdown user-dropdown corner-triangle top-right">
                                <ul class="user-dropdown-menu">
                                    <li class="dropdown-user-info">
                                        <a href="">
                                            <div class="clearfix">
                                                <div class="user-image float-left">
                                                    <img src="{{ asset('images/avatar.png') }}" alt=""
                                                         class="img-fluid">
                                                </div>
                                                <div class="user-details">
                                                    <div class="user-name">
                                                        <span class="hi">hi,</span>
                                                        {{ Auth::user()->name }}
                                                    </div>
                                                    <div class="user-email">
                                                        <span class="email">{{ auth()->user()->email }}</span>
                                                        <span class="welcome">Welcome back</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="user-dropdown-menu-item">
                                        <a href="">
                                            <i class="far fa-gem"></i>マイコース
                                        </a>
                                    </li>
                                    <li class="user-dropdown-menu-item">
                                        <a href="{{ route('favorites.index') }}">
                                            <i class="far fa-heart"></i>お気に入りリスト
                                        </a>
                                    </li>
                                    <li class="user-dropdown-menu-item">
                                        <a href="">
                                            <i class="fas fa-user"></i>プロフィール
                                        </a>
                                    </li>
                                    <li class="dropdown-user-logout user-dropdown-menu-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">ログアウト</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    @endauth
                    @guest
                        <span class="signin-box-move-desktop-helper"></span>
                        <div class="sign-in-box btn-group">

                            <button type="button" class="btn btn-sign-in" data-toggle="modal"
                                    data-target="#signInModal">Login
                            </button>

                            <button type="button" class="btn btn-sign-up" data-toggle="modal"
                                    data-target="#signUpModal">Sign up
                            </button>

                        </div>
                    @endguest

                </nav>
            </div>
        </div>
    </div>
</section>
