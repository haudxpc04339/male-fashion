
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">Sign in</a>
            <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
            <span>Usd <i class="arrow_carrot-down"></i></span>
            <ul>
                <li>USD</li>
                <li>EUR</li>
                <li>USD</li>
            </ul>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{asset('/template/client/img/icon/search.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('/template/client/img/icon/heart.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('/template/client/img/icon/cart.png')}}" alt=""> <span>0</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
       
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        @auth
                        <div class="header__top__hover">
                            <span>@auth{{auth()->user()->name}} @endauth<i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li><a href="{{route('logout')}}">Đăng Xuất</a></li>
                            </ul>
                        </div>
                        @else
                        <div class="header__top__links">
                            <a href="{{route('login')}}">Đăng nhập</a>
                        @endauth
                            <a href="#">FAQs</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('template/client/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Trang chủ</a></li>
                        <li><a href="{{route('shop')}}">Sản phẩm</a></li>
                        <li><a href="{{route('about')}}">Giới thiệu</a></li>
                        <li><a href="{{route('post')}}">Bài viết</a></li>
                        <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('template/client/img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('template/client/img/icon/heart.png')}}" alt=""></a>
                    <a href="{{route('shopping-cart')}}"><img src="{{asset('template/client/img/icon/cart.png')}}" height="22px" width="20px" alt=""> <span style="margin-left:2px;" >{{$count}}</span></a>
                    <div class="price">{{number_format($total->total).' VND' ?? '0 VND'}}</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>