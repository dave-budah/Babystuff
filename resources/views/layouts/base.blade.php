<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Babystuff & Homeware</title>
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
<style>
    .fa-lock {
        font-size: 1.5rem !important;
        margin-left: .3rem !important;
    }
</style>
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
                                <a title="Call: +263 78 0901 746" href="#" ><span class="icon label-before fa fa-whatsapp"></span> +263 78 0901 746 / +263 7 80564035</a>
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
                                                    <a title="Attributes" href="{{route('admin.attributes')}}">Attributes</a>
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
                                                <li class="menu-item" >
                                                    <a title="All Orders" href="{{route('admin.orders')}}">All Orders</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Messages" href="{{route('admin.contact')}}">Messages</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Settings" href="{{route('admin.settings')}}">Settings</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('logout') }}" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit()" class="text-danger">Logout <i class="fa fa-lock text-danger"></i></a>
                                                </li>
                                                <form method="Post" action="{{ route('logout') }}" id="logout-form">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>
                                    @else
{{--                                        Customer--}}
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="My account" href="#">LoggedIn as: {{Auth::user()->name}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="My Orders" href="{{route('user.orders')}}">My Orders</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="My Profile" href="{{route('user.profile')}}">My Profile</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Change password" href="{{route('user.changepassword')}}">Change password</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a href="{{ route('logout') }}" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit()" class="text-danger">Logout <i class="fa fa-lock text-danger"></i></a>
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
                        <a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-bsh.jpg')}}" alt="BSH Logo" width="60" height="60"></a>
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
                                <a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{$slot}}

@livewire('footer-component')

<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
{{--<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>--}}
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"></script>
<script src="https://cdn.tiny.cloud/1/l0d8qb9qabmmvqcdr3drutdhbpcubqwtwoecx8nqt8x50jdm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@livewireScripts

@stack('scripts')
</body>
</html>
