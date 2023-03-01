<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i>
                                    English <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img src="{{ asset('assets/imgs/theme/flag-fr.png') }}"
                                                alt="">Français</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/imgs/theme/flag-dt.png') }}"
                                                alt="">Deutsch</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/imgs/theme/flag-ru.png') }}"
                                                alt="">Pусский</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @if (Auth::user())
                @else
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a> / <a
                                        href="{{ route('register') }}">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{ route('home.component') }}"><img src="{{ asset('assets/imgs/logo/logo.png') }}"
                            alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-1">
                        <form action="#">
                            <input type="text" placeholder="Search for items...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img class="svgInject" alt="Surfside Media"
                                        src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                    <span class="pro-count blue">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ route('cart.component') }}">
                                    <img alt="Surfside Media"
                                        src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                    <span class="pro-count blue">@livewire('cart-count-component')</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    @if (Cart::instance('cart')->count() > 0)
                                        <ul>
                                            @foreach (Cart::instance('cart')->content() as $item)
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="product-details.html">
                                                            @if ($item->options->image)
                                                                <img src="{{ url('images/' . $item->options->image) }}"
                                                                    alt="Error">
                                                            @else
                                                                <img src="{{ url('images/deflaut_product.png') }}"
                                                                    alt="Error">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="product-details.html">{{ $item->name }}</a></h4>
                                                        <h4><span>{{ $item->qty }} ×
                                                            </span>{{ number_format($item->price, 0, '', ',') }} VND
                                                        </h4>
                                                        {{-- <h4><span>Subtotal: </span>{{ number_format($item->subtotal, 0, '', ',') }} VND</h4>                                     --}}
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a wire:click="destroy('{{ $item->rowId }}')"><i
                                                                class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>{{ Cart::subtotal() }} VND</span></h4>
                                            </div>
                                            @if (Auth::check())
                                                <div class="shopping-cart-button">
                                                    <a href="{{ route('cart.component') }}">View cart</a>
                                                    <a href="{{ route('checkout') }}">Checkout</a>
                                                </div>
                                            @else
                                                <div class="shopping-cart-button">
                                                    <a href="{{ route('login') }}">View cart</a>
                                                    <a href="{{ route('login') }}">Checkout</a>
                                                </div>
                                            @endif
                                        </div>
                                    @else
                                        <p>Không có gì trong giỏ hàng</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{ route('home.component') }}"><img src="{{ asset('assets/imgs/logo/logo.png') }}"
                            alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's
                                        Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Dresses</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Blouses & Shirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Hoodies & Sweatshirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Women's Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Suits & Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Bodysuits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Tanks & Camis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Coats & Jackets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Bottoms</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Leggings</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Skirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Shorts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Jeans</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Pants & Capris</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Bikini Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Cover-Ups</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Swimwear</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{ asset('assets/imgs/banner/menu-banner') }}-2.jpg"
                                                        alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{ asset('assets/imgs/banner/menu-banner') }}-3.jpg"
                                                        alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <ul class="more_slide_open" style="display: none;">
                                        <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Beauty,
                                                Health</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Bags and
                                                Shoes</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Consumer
                                                Electronics</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Automobiles
                                                & Motorcycles</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="more_categories">Show more...</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="{{ route('home.component') }}">Home </a></li>
                                <li><a href="{{ route('about.component') }}">About</a></li>
                                <li><a href="{{ route('shop.component') }}">Shop</a></li>
                                <li class="position-static"><a href="#">Our Collections <i
                                            class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        @foreach ($category as $item)
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#"
                                                    {{ $item->id }}>{{ $item->name }}</a>
                                                @foreach ($item->children as $child)
                                                    <ul>
                                                        <li>
                                                            <a href="#"
                                                                {{ $child->id }}>{{ $child->name }}</a>
                                                        </li>
                                                    </ul>
                                                    @foreach ($child->children as $son)
                                                        <ul>
                                                            <li style="margin-left:15px">
                                                                <a href="#"
                                                                    {{ $son->id }}>{{ $son->name }}</a>
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                @endforeach
                                            </li>
                                        @endforeach
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="product-details.html"><img
                                                        src="{{ asset('assets/imgs/banner/menu-banner') }}.jpg"
                                                        alt="Surfside Media"></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="product-details.html">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>35%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog </a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <!-- account -->
                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->utype === 'ADM')
                                            {{-- Admin --}}
                                            <li><a href="#">My Account ({{ Auth::user()->name }})<i
                                                        class="fi-rs-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <li><a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                                                        </li>
                                                    </form>
                                                </ul>
                                            </li>
                                        @else
                                            {{-- User --}}
                                            <li><a href="#">My Account ({{ Auth::user()->name }})<i
                                                        class="fi-rs-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                    <li><a href="{{ route('cart.component') }}">Cart</a></li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <li><a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                                                        </li>
                                                    </form>
                                                </ul>
                                            </li>
                                        @endif
                                    @else
                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Dashboard</a></li>
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                    @endif
                                    <!-- /.account -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+1) 0000-000-000 </p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                    </p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="Surfside Media"
                                        src="{{ asset('assets/imgs/theme/icons/icon') }}-heart.svg">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ route('cart.component') }}">
                                    <img alt="Surfside Media" src="{{ asset('assets/imgs/theme/icons/icon') }}-cart.svg">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media"
                                                        src="{{ asset('assets/imgs/shop/thumbnail-3') }}.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media"
                                                        src="{{ asset('assets/imgs/shop/thumbnail-4') }}.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        @if (Auth::check())
                                            <div class="shopping-cart-button">
                                                <a href="{{ route('cart.component') }}">View cart</a>
                                                <a href="{{ route('checkout') }}">Checkout</a>
                                            </div>
                                        @else
                                            <div class="shopping-cart-button">
                                                <a href="{{ route('login') }}">View cart</a>
                                                <a href="{{ route('login') }}">Checkout</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{ route('home.component') }}"><img src="{{ asset('assets/imgs/logo/logo.png') }}"
                            alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                </li>
                                <li> <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer &
                                        Office</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="{{ route('home.component') }}">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="{{ route('shop.component') }}">Shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="{{ route('about.component') }}">About</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                    Collections</a>
                                <ul class="dropdown">
                                    @foreach ($category as $item)
                                        <li class="smenu-item-has-children">
                                            <span class="menu-expand"></span><a href="#"
                                                {{ $item->id }}>{{ $item->name }}</a>
                                            @foreach ($item->children as $child)
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="#" {{ $child->id }}>{{ $child->name }}</a>
                                                    </li>
                                                </ul>
                                                @foreach ($child->children as $son)
                                                    <ul class="dropdown">
                                                        <li style="margin-left:15px">
                                                            <a href="#" {{ $son->id }}>{{ $son->name }}</a>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            @endforeach
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="blog.html">Blog</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> Our location </a>
                    </div>
                    @if (Auth::user())
                    @else
                        <div class="single-mobile-header-info">
                            <a href="{{ route('login') }}">Log In </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>
                    @endif
                    <div class="single-mobile-header-info">
                        <a href="#">(+1) 0000-000-000 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon') }}-facebook.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon') }}-twitter.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon') }}-instagram.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon') }}-pinterest.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon') }}-youtube.svg"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
