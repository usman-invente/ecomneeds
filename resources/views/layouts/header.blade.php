<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecomneeds</title>
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/demobar_w3_4thDec2019.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/css/pace.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('public/css/before-after.min.css')}}">
    @yield('fancybox-css')
</head>

<body>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>



    <script async src="{{asset('public/js/autotrack.js')}}"></script>

    <meta name="robots" content="noindex">

    <body>
        <!-- Topmenu-4 block -->
        <section class="w3l-top-menu-4">
            <header class="top-menu4 " Id="home">
                <div class="wrapper">
                    <div class="align-topmenu4">
                        <div class="top-menu4-left">
                            <!--overlay-menu-->
                            <div class="fullwidth-overlay-menu">
                                <input type="checkbox" id="view"></input>
                                <div class="top-menu4-icon">
                                    <label for="view" class="topmenu4-expand">
                                        <div class="hamburger2">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="logo">
                                    <!-- logo text -->
                                    <a class="brand-logo" href="{{url('/')}}">ECOMNEEDS</a>
                                    <!-- logo image -->
                                    <!-- <a class="brand-logo-img" href="#URL"><img src="images/logo.png" alt="" title="logo" /></a> -->
                                </div>
                                <div class="expanded-menu expanded-menu-effect">
                                    <label for="view" class="close" title="Close">&times;</label>
                                    <nav class="menu-side-over-left">
                                        <ul>
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
{{--                                            <li><a href="team.html">Team</a></li>--}}
{{--                                            <li><a href="team-single.html">Team Single</a></li>--}}
{{--                                            <li><a href="gallery.html">Gallery</a></li>--}}
{{--                                            <li><a href="gallery-single.html">Gallery Single</a></li>--}}
                                        </ul>
{{--                                        <ul>--}}
{{--                                            <li><a href="pricing.html">Pricing</a> </li>--}}
{{--                                            <li><a href="timeline.html">Timeline</a></li>--}}
{{--                                            <li><a href="faq.html">FAQ's</a></li>--}}
{{--                                            <li><a href="404.html">404 Page</a></li>--}}
{{--                                            <li><a href="coming-soon.html">Coming Soon</a></li>--}}
{{--                                            <li><a href="email-template.html">Email Template</a></li>--}}
{{--                                            <li><a href="blog.html">Blog</a></li>--}}
{{--                                            <li><a href="blog-single.html">Blog Single</a></li>--}}
{{--                                        </ul>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="ecommerce.html">Ecommerce</a></li>--}}
{{--                                            <li><a href="ecommerce-single.html">Ecommerce Single</a></li>--}}
{{--                                            <li><a href="ecommerce-cart.html">Ecommerce Cart</a></li>--}}
{{--                                            <li><a href="search-results.html">Search Results</a></li>--}}
{{--                                            <li><a href="login.html">Login</a></li>--}}
{{--                                            <li><a href="signup.html">Signup</a></li>--}}
{{--                                            <li><a href="contact.html">Contact</a> </li>--}}
{{--                                        </ul>--}}
                                    </nav>
                                </div>
                            </div>
                            <!--/overlay-menu-->

                        </div>
                        <div class="top-menu4-right">
                            <ul class="top-menu-right">
                                <li><a href="{{ url('/') }}" href="/">Home</a></li>
                                <li><a href="{{ route('about') }}" href="/">About</a></li>
                                <li><a href="{{ route('services') }}" href="/">Services</a></li>
                                <li><a href="{{ route('pricing') }}" href="/">Pricing</a></li>
{{--                                <li><a href="{{ route('blog') }}" href="/">Blog</a></li>--}}
                                @guest
                                <li title="Login"><a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                <li title="Signup"><a href="{{ route('register') }}">Register</a></li>
                                @endif
                                @else
                                <li><a href="{{ route('home') }}" href="/">Dashboard</a></li>
                                <li title="Signup"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                              </li>
                                @endguest
                            </ul>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <form action="#" method="GET" class="d-flex">
                                        <input type="search" placeholder="Search.." name="search" required="required"
                                            autofocus>
                                        <button type="submit">Search</button>
                                        <a class="close" href="#">&times;</a>
                                    </form>
                                </div>
                            </div>
                            <!-- /search popup -->
                        </div>
                    </div>


                </div>
            </header>
        </section>
