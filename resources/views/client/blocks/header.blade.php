<div class="humberger__menu__wrapper">

    <div class="humberger__menu__cart">
        <ul>

        </ul>
    </div>
    <div class="humberger__menu__widget">


    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <div class="header__top__right__auth">
            <a href=""><i class="fa fa-user"></i> Login</a>
        </div>
        <ul>
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="{{ route('shop')}}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        @php
                            $cart = session()->get('cart', []);
                            $totalItem = count($cart);
                        @endphp
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span
                                    id="total-item-cart">{{ $totalItem }}</span></a></li>
                    </ul>
                    @if (Auth::Check())
                        <div class="header__top__right__auth">
                            <a href=""><i class="fa fa-user"></i>{{ Auth::user()->name }} | </a>
                        </div>
                    @else
                    <div class="header__top__right__auth">
                        <a href="{{ route('login') }}"><i class="fa fa-user"></i>LogIn | </a>
                    </div>
                    @endif

                    <div class="header__top__right__auth">
                        <a href="{{ route('admin.logout') }}">LogOut</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
