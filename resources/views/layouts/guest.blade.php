<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"/>
    @livewireStyles
</head>
<body class="home-page home-01 ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item" >
                                <a title="Call: +263 78 0901 746" href="#" ><span class="icon label-before fa fa-mobile"></span> +263 78 0901 746</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-en.png')}}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu lang" >
                                </ul>
                            </li>

                            @if(Route::has('login'))
                                @auth
                                    @if(Auth::user()->user_type === 'ADM')
                                        {{--                                        Admin--}}
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="My account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Categories" href="{{route('admin.categories')}}">Categories</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Products" href="{{route('admin.products')}}">Products</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Manage home slides" href="{{route('admin.homeslider')}}">Manage Home Slides</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Home Categories" href="{{route('admin.homecategories')}}">Home Categories</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Sale setting" href="{{route('admin.sale')}}">Sale Setting</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="All Coupons" href="{{route('admin.coupons')}}">All Coupons</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                                </li>
                                                <form method="Post" action="{{ route('logout') }}" id="logout-form">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>
                                    @else
                                        {{--                                        Customer--}}
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="My account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                                </li>
                                                <form method="Post" action="{{ route('logout') }}" id="logout-form">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                                    <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-bsh.jpg')}}" alt="mercado" width="60" height="60"></a>
                    </div>

                    @livewire('header-search-component')

                    <div class="wrap-icon right-section">
                        @livewire('wishlist-count-component')
                        @livewire('cart-count-component')
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="/about" class="link-term mercado-item-title">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="/shop" class="link-term mercado-item-title">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="/cart" class="link-term mercado-item-title">Cart</a>
                            </li>
                            <li class="menu-item">
                                <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                            </li>
                            <li class="menu-item">
                                <a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{$slot}}

<footer id="footer">
    <div class="wrap-footer-content footer-style-1">

        <div class="wrap-function-info">
            <div class="container">
                <ul>
                    <li class="fc-info-item">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Free Shipping</h4>
                            <p class="fc-desc">Free On Oder Over $99</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Guarantee</h4>
                            <p class="fc-desc">30 Days Money Back</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Safe Payment</h4>
                            <p class="fc-desc">Safe your online payment</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Online Support</h4>
                            <p class="fc-desc">We Have Support 24/7</p>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <!--End function info-->

        <div class="main-footer-content">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Contact Details</h3>
                            <div class="item-content">
                                <div class="wrap-contact-detail">
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="contact-txt">55 Fife Avenue, Corner Leopold Takawira and Fife</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="contact-txt"> +263 78 0901 746 / +263 78 0564 035</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="contact-txt">info@babystuffandhomeware.org.zw</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item footer-item-second">
                            <h3 class="item-header">Sign up for newsletter</h3>
                            <div class="item-content">
                                <div class="wrap-newletter-footer">
                                    <form action="#" class="frm-newletter" id="frm-newletter">
                                        <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
                                        <button class="btn-submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                        <div class="row">
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">My Account</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="#" class="link-term">My Account</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Brands</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">Information</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">Order History</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">We Using Safe Payments:</h3>
                            <div class="item-content">
                                <div class="wrap-list-item wrap-gallery">
                                    <img src="{{asset('assets/images/payment.png')}}" style="max-width: 260px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Social network</h3>
                            <div class="item-content">
                                <div class="wrap-list-item social-network">
                                    <ul>
                                        <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                        </div>
                    </div>

                </div>
            </div>

            <div class="wrap-back-link">
                <div class="container">
                    <div class="back-link-box">
                        <h3 class="backlink-title">Quick Links</h3>
                        <div class="back-link-row">
                            <ul class="list-back-link" >
                                <li><span class="row-title">Mobiles:</span></li>
                                <li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
                                <li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
                                <li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
                                <li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
                                <li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
                                <li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
                                <li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
                                <li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
                                <li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
                                <li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
                            </ul>

                            <ul class="list-back-link" >
                                <li><span class="row-title">Tablets:</span></li>
                                <li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
                                <li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
                                <li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
                                <li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
                                <li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
                                <li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
                                <li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
                                <li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
                                <li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
                            </ul>

                            <ul class="list-back-link" >
                                <li><span class="row-title">Fashion:</span></li>
                                <li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
                                <li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
                                <li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
                                <li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
                                <li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
                                <li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
                                <li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
                                <li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
                                <li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="coppy-right-box">
            <div class="container">
                <div class="coppy-right-item item-left">
                    <p class="coppy-right-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Babystuff & Homeware. All rights reserved</p>
                </div>
                <div class="coppy-right-item item-right">
                    <div class="wrap-nav horizontal-nav">
                        <ul>
                            <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
                            <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
                            <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
                            <li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
@livewireScripts
</body>
</html>
