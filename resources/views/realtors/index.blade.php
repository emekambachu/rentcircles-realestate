<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />

    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>

    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ asset('admin-assets/css/plugin.css') }}" rel="stylesheet" />
    <!-- Perfect scrollbar CSS-->
    <link href="{{ asset('admin-assets/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- style CSS -->
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet" />
    <!-- Dashboard CSS -->
    <link href="{{ asset('admin-assets/css/dashboard.css') }}" rel="stylesheet" />
    <!--color switcher css-->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/switcher/skin-aqua.css') }}"
          media="screen" id="style-colors" />
    <!-- Document Title -->

    <!-- Vue.js -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title> Realtor Dashboard | RentCircles</title>

</head>
<body>

<div id="app" class="page-wrapper">

    <!--Sidebar Menu Starts-->
    <aside class="menu-sidebar js-right-sidebar d-block d-lg-none">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('admin-assets/images/logo-black.png') }}" alt="Listagram" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar2">
            <div class="account-img">
                <img src="{{ asset('admin-assets/images/clients/reviewer-4.png') }}" alt="Steve Austin" />
            </div>
            <h4 class="name">Howdy, {{ Auth::user()->name }}!</h4>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/realtor/account">
                            <i class="ion-ios-gear-outline"></i>Dashboard
                        </router-link>
                    </li>

                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/realtor/account/my-properties">
                            <i class="ion-ios-gear-outline"></i>My Properties
                        </router-link>
                    </li>

                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/realtor/account/properties/add">
                            <i class="ion-ios-gear-outline"></i>Add Property
                        </router-link>
                    </li>

                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/realtor/account/profile">
                            <i class="ion-ios-gear-outline"></i>Profile
                        </router-link>
                    </li>

                    <li>
                        <a href="{{ route('realtor.logout') }}">
                            <i class="ion-ios-upload-outline"></i>Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--Sidebar Menu ends-->

    <!--Dashboard content Wrapper starts-->
    <div class="dash-content-wrap">

        <!-- Top header starts-->
        <header class="db-top-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9 col-sm-6 col-4">
                        <div class="site-navbar-wrap v2">
                            <div class="site-navbar">
                                <div class="row align-items-center">
                                    <nav class="site-navigation float-left">
                                        <div class="container">
                                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/realtor/account">Dashboard
                                                    </router-link>
                                                </li>

                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/realtor/account/my-properties">My Properties
                                                    </router-link>
                                                </li>

                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/realtor/account/properties/add">Add Property
                                                    </router-link>
                                                </li>

                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/realtor/account/profile">Profile
                                                    </router-link>
                                                </li>

                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="d-lg-none sm-right">
                                        <a href="#" class="mobile-bar js-menu-toggle">
                                            <span class="ion-android-menu"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="site-mobile-menu">
                                <div class="site-mobile-menu-header">
                                    <div class="site-mobile-menu-close  js-menu-toggle">
                                        <span class="ion-ios-close-empty"></span>
                                    </div>
                                </div>
                                <div class="site-mobile-menu-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-8">
                        <div class="header-button">
                            <div class="header-button-item has-noti js-item-menu">
                                <i class="ion-ios-bell-outline"></i>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 2 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 red">
                                            <i class="icofont-check"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your listing <b>Hotel Ocean Paradise</b> has been approved!</p>
                                            <span class="date">5min ago</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 green">
                                            <i class="icofont-ui-message"></i>
                                        </div>
                                        <div class="content">
                                            <p>You have 3 unread Messages</p>
                                            <span class="date">5min ago</span>
                                        </div>
                                    </div>
                                    <div class="notify-bottom text-center pad-tb-20">
                                        <a href="#">View All Notification</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-button-item js-sidebar-btn">
                                <img src="{{ asset('admin-assets/images/clients/reviewer-4.png') }}" alt="...">
                                <span>Steve <i class="ion-arrow-down-b"></i></span>
                            </div>
                            <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="">
                                            <i class="ion-ios-gear-outline"></i>Dashboard</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="">
                                            <i class="ion-social-buffer-outline"></i>Listings</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="">
                                            <i class="ion-ios-copy-outline"></i>Bookings</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="">
                                            <i class="ion-ios-star-outline"></i>Reviews</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="">
                                            <i class="ion-ios-email-outline"></i>Inbox</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="">
                                            <i class="ion-ios-person-outline"></i>Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="ion-ios-upload-outline"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top header ends-->

        <!--Vue Router View-->
        <router-view></router-view>

        <!--Dashboard footer starts-->
        <div class="dash-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© {{ date('Y') }} RentCircles. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Dashboard footer ends-->

    </div>
    <!--Dashboard content Wrapper ends-->

</div>
<!-- Plugin JS-->
<script src="{{ asset('admin-assets/js/plugin.js') }}"></script>
<!--Perfect Scrollbar JS-->
<script src="{{ asset('admin-assets/js/perfect-scrollbar.min.js') }}"></script>
<!-- Main JS-->
<script src="{{ asset('admin-assets/js/main.js') }}"></script>
<!-- Dashboard JS-->
<script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
</body>

</html>
