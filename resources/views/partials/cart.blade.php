<div class="icon">
    <a href=""><i class="fas fa-shopping-cart"></i></a>
    {{--    <span class="number">{{ Cart::getContent()->count() }}</span>--}}
</div>
<div class="dropdown course-list-dropdown corner-triangle top-right">
    <div class="list-wrapper">
        <div class="item-list">
            <ul>
                @foreach($carts as $cart)
                    <li>
                        <div class="item clearfix">
                            <div class="item-image">
                                <a href="">
                                    <img src="{{ asset('images/learning.jpg') }}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="item-details">
                                <a href="">
                                    <div class="course-name">{{ $cart->title }}</div>
                                    <div class="item-price">
                                        @if($course->is_sale)
                                            <span
                                                class="current-price">¥{{ $course->price * 0.1 <= 1200 ? 1200 : $course->price * 0.1 }}</span>
                                            <span class="original-price">¥{{ $course->price }}</span>
                                        @else
                                            <span class="">¥{{ $course->price }}</span>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="dropdown-footer">
            <div class="cart-total-price clearfix">
                <span>Total:</span>
                <div class="float-right">
                    <span class="current-price">¥{{ $total_price }}</span>
                </div>
            </div>
{{--            <a href="{{ route('carts.all') }}">Go to cart</a>--}}
        </div>
    </div>
    <div class="empty-box text-center d-none">
        <p>Your cart is empty.</p>
        <a href="">Keep Shopping</a>
    </div>
</div>
