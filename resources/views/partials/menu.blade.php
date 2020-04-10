<div class="main-nav-wrap">
    <div class="mobile-overlay"></div>

    <ul class="mobile-main-nav">
        <div class="mobile-menu-helper-top"></div>

        <li class="has-children">
            <a href="">
                <i class="fas fa-th d-inline"></i>
                <label style="width: 100px">カテゴリ</label>
                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
            </a>

            <ul class="category corner-triangle top-left is-hidden">
                <li class="go-back">
                    <a href=""><i class="fas fa-angle-left"></i>メニュー</a>
                </li>
                <li>
                    @foreach($categories as $category)
                        <a href="{{ route('categories.show', $category->slug)}}">
                            <span class="icon"><i class="fa fa-caret-right"></i></span>
                            <span>{{ $category->title  }}</span>
                        </a>
                    @endforeach
                </li>
            </ul>
        </li>

        <div class="mobile-menu-helper-bottom"></div>
    </ul>
</div>
