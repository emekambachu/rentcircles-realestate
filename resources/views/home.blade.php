<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>RentCircles</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="RentCircles | Property, realtors, real estates, rent">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('main-assets/img/favicon.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('main-assets/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('main-assets/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('main-assets/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('main-assets/css/responsive.css') }}">
    <!--Custom-->
    <link rel="stylesheet" href="{{ asset('main-assets/custom/styles.css') }}">

    <!-- Vue.js -->
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div id="app" class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:info@rentcircles.com?Subject=Inquiry">
                                        <i class="icon-mail"></i> info@rentcircles.com</a></li>
                                <li><a href="{{ url('contact') }}"><i class="icon-placeholder"></i>
                                        15/A, Nest Tower, NYC</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook">
                                                        <i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="#" title="Twitter">
                                                        <i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#" title="Instagram">
                                                        <i class="fab fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->

        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('main-assets/img/logo-2.png') }}" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li>
                                            <router-link
                                                class=""
                                                exact
                                                to="/">Home
                                            </router-link>
                                        </li>
                                        <li class="menu-icon">
                                            <router-link
                                                class=""
                                                exact
                                                to="/about">About
                                            </router-link>
                                            <ul class="sub-menu menu-pages-img-show">
                                                <li>
                                                    <router-link
                                                        class=""
                                                        exact
                                                        to="/about">Overview
                                                    </router-link>
                                                </li>
                                                <li>
                                                    <router-link
                                                        class=""
                                                        exact
                                                        to="/terms">Terms of Use
                                                    </router-link>
                                                </li>
                                                <li>
                                                    <router-link
                                                        class=""
                                                        exact
                                                        to="/privacy-policy">Privacy Policy
                                                    </router-link>
                                                </li>
                                                <li>
                                                    <router-link
                                                        class=""
                                                        exact
                                                        to="/faq">FAQ
                                                    </router-link>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-icon">
                                            <router-link
                                                class=""
                                                exact
                                                to="/properties">Properties
                                            </router-link>
                                            <ul class="sub-menu menu-pages-img-show">
                                                <li>
                                                    <router-link
                                                        class=""
                                                        exact
                                                        to="/properties">Properties
                                                    </router-link>
                                                </li>
                                                <li>
                                                    <router-link
                                                        class=""
                                                        exact
                                                        to="/locations">Locations
                                                    </router-link>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <router-link
                                                class=""
                                                exact
                                                to="/contact">Contacts
                                            </router-link>
                                        </li>

                                        <li class="special-link">
                                            <a class="border-radius-8" href="/realtor/login">Realtor</a>
                                        </li>
                                        <li class="special-link">
                                            <a class="border-radius-8" href="/login">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="col--- ltn__header-options ltn__header-options-2 ">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('main-assets/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="ltn__utilize-menu">
                <ul>
                    <li>
                        <router-link
                            class=""
                            exact
                            to="/">Home
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            class=""
                            exact
                            to="/about">About
                        </router-link>
                        <ul class="sub-menu">
                            <li>
                                <router-link
                                    class=""
                                    exact
                                    to="/about">Overview
                                </router-link>
                            </li>
                            <li>
                                <router-link
                                    class=""
                                    exact
                                    to="/terms">Terms of Use
                                </router-link>
                            </li>
                            <li>
                                <router-link
                                    class=""
                                    exact
                                    to="/privacy-policy">Privacy Policy
                                </router-link>
                            </li>
                            <li>
                                <router-link
                                    class=""
                                    exact
                                    to="/faq">FAQ
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <router-link
                            class=""
                            exact
                            to="/contact">Contact
                        </router-link>
                    </li>
                    <li>
                        <a href="/realtor/login">Realtor</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                </ul>
            </div>

            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook">
                            <i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter">
                            <i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin">
                            <i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram">
                            <i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <router-view></router-view>

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="{{ asset('main-assets/img/logo-2.png') }}" alt="Logo">
                                </div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Brooklyn, New York, United States</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:info@rentcircles.com">info@rentcircles.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook">
                                            <i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter">
                                            <i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin">
                                            <i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Youtube">
                                            <i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Company</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li>
                                        <router-link
                                            class=""
                                            exact
                                            to="/about">About
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link
                                            class=""
                                            exact
                                            to="/terms">Terms of use
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link
                                            class=""
                                            exact
                                            to="/privacy-policy">Privacy Policy
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link
                                            class="nav-link"
                                            exact
                                            to="/faq">FAQ
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link
                                            class="nav-link"
                                            exact
                                            to="/contacts">Contacts
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Services</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="">Properties</a></li>
                                    <li><a href="">Realtor</a></li>
                                    <li><a href="">Customer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit">
                                            <i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                            <h5 class="mt-30">We Accept</h5>
                            <img src="{{ asset('main-assete/img/icons/payment-4.png') }}" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>All Rights Reserved @ RentCircles <span class="current-year">
                                    {{ date('Y') }}</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="{{ url('terms') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('privacy-policy') }}">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

</div>
<!-- Body main wrapper end -->

<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->


@yield('bottom-assets')

<!-- All JS Plugins -->
<script src="{{ asset('main-assets/js/plugins.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('main-assets/js/main.js') }}"></script>

</body>

</html>

