<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description"
        content="create ecommerce website template for your online store, responsive mobile templates">
    <meta name="keywords" content="ecommerce website templates, online store,">
    <title> Mobistore Online Mobile Store Template </title>
    <!-- Bootstrap -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="{{ asset('user/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/owl.theme.default.css') }}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{ asset('user/css/font-awesome.min.cs') }}s" rel="stylesheet">
    @livewireStyles
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- top-header-->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">
                    <p class="top-text">Flexible Delivery, Fast Delivery.</p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <ul>
                        <li>+180-123-4567</li>
                        <li>info@demo.com</li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.top-header-->
        </div>
    </div>
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('user/images/logo.png') }}" alt=""> </a>
                    </div>
                </div>
                <!-- /.logo -->
                <!-- search -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-bg">
                        <input type="text" class="form-control" placeholder="Search Here">
                        <button type="Submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->utype === 'ADM')
                            {{-- Admin --}}
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="account-section">
                                    <ul>
                                        <li>
                                            <a href="{{ route('admin.dashboard') }}" class="title hidden-xs">Admin
                                                Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            {{-- User --}}
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="account-section">
                                    <ul>
                                        <li>
                                            <a href="{{ route('user.dashboard') }}" class="title hidden-xs">
                                                User Dashboard
                                                {{-- ({{ Auth::user()->name }})  --}}
                                            </a>
                                        </li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li class="hidden-xs">|</li>
                                            <li>
                                                <a class="title hidden-xs" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();this.closest('form').submit();">
                                                    Log Out
                                                </a>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="account-section">
                                <ul>
                                    <li><a href="{{ route('login') }}" class="title hidden-xs">My Account</a></li>
                                    <li class="hidden-xs">|</li>
                                    <li><a href="{{ route('register') }}" class="title hidden-xs">Register</a></li>
                                    <li class="hidden-xs">|</li>
                                    <li><a href="{{ route('login') }}" class="title hidden-xs">Login</a></li>

                                </ul>
                            </div>
                        </div>
                    @endif
                    @endif
                    <!-- /.account -->
                    <!-- search -->
                </div>
            </div>
            <!-- navigation -->
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- navigations-->
                            <div id="navigation">
                                <ul>
                                    <li class="active"><a href="{{ route('home.component') }}">Home</a></li>
                                    <li class="active"><a href="{{ route('shop.component') }}">Shop</a></li>
                                    {{-- <li class="has-sub"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-default.html">Blog Default</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <!-- /.navigations-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /. header-section-->

        <!-- Main -->
        {{ $slot }}
        <!-- End of Main -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- footer-company-links -->
                    <!-- footer-contact links -->
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <h3 class="footer-title">Contact Info </h3>
                            <div class="contact-info">
                                <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                                <span class="contact-text">1683 Pickens Way Sherman,<br>
                                    Bird Street Albuquerque
                                    Us 75090</span>
                            </div>
                            <div class="contact-info">
                                <span class="contact-icon"><i class="fa fa-phone"></i></span>
                                <span class="contact-text">+180-123-4567 / 89</span>
                            </div>
                            <div class="contact-info">
                                <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                                <span class="contact-text">info@demo.com</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.footer-useful-links -->
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <h3 class="footer-title">Quick Links</h3>
                            <ul class="arrow">
                                <li><a href="#">Home </a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Mobiles</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-useful-links -->
                    <!-- footer-policy-list-links -->
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <h3 class="footer-title">Policy Info</h3>
                            <ul class="arrow">
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Cancellation &amp; Returns</a></li>
                                <li><a href="#">Shipping and Delivery</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">T &amp; C</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-policy-list-links -->
                    <!-- footer-social links -->
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <h3 class="footer-title">Connect With Us</h3>
                            <div class="ft-social">
                                <span><a href="#" class="btn-social btn-facebook"><i
                                            class="fa fa-facebook"></i></a></span>
                                <span><a href="#" class="btn-social btn-twitter"><i
                                            class="fa fa-twitter"></i></a></span>
                                <span><a href="#" class="btn-social btn-googleplus"><i
                                            class="fa fa-google-plus"></i></a></span>
                                <span><a href="#" class=" btn-social btn-linkedin"><i
                                            class="fa fa-linkedin"></i></a></span>
                                <span><a href="#" class=" btn-social btn-pinterest"><i
                                            class="fa fa-pinterest-p"></i></a></span>
                                <span><a href="#" class=" btn-social btn-instagram"><i
                                            class="fa fa-instagram"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.footer-social links -->
                </div>
            </div>
            <!-- tiny-footer -->
            <div class="tiny-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="payment-method alignleft">
                                <ul>
                                    <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-mastercard  fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-discover fa-2x"></i></a></li>
                                </ul>
                            </div>
                            <p class="alignright">Copyright © All Rights Reserved 2020 Template Design by
                                <a href="https://easetemplate.com/" target="_blank"
                                    class="copyrightlink">EaseTemplate</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /. tiny-footer -->
            </div>
        </div>
        <!-- /.footer -->

    <script type="text/javascript" src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/menumaker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/sticky-header.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/multiple-carousel.js') }}"></script>
    @livewireScripts

</body>

</html>
