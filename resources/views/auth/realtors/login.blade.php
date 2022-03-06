@extends('home.includes.layout')

@section('title')
    Realtor Login
@endsection

@section('top-assets')
    <style>
        .ltn__slide-item-2{
            height: calc(50vh - 0px) !important;
            padding-top: 80px !important;
            min-height: 300px;
        }
    </style>
@endsection

@section('content')
    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3 section-bg-2">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="{{ asset('main-assets/img/slider/11.jpg') }}">
                <div class="ltn__slide-item-inner text-center pt-100 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="ltn__breadcrumb-inner">
                                    <h1 class="page-title">Realtor | Login</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <div class="ltn__login-area pb-65 mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="account-login-inner">

                        <form method="post" action="{{ route('realtor.login.submit') }}"
                              class="ltn__form-box contact-form-box">
                            @csrf
                            <div class="input-item">
                                <input type="text" name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Email*" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="input-item">
                                <input type="password" name="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Password*" required>
                            </div>

                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit">LOGIN</button>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar-area ltn__right-sidebar">
                        <!-- Menu Widget -->
                        <div class="widget-2 ltn__menu-widget ltn__menu-widget-2 text-uppercase">
                            <ul>
                                <li><a href="{{ route('realtor.register') }}">No account? Sign up
                                        <span><i class="fas fa-arrow-right"></i></span></a></li>
                                <li><a href="{{ route('register') }}">Sign up as a user
                                        <span><i class="fas fa-arrow-right"></i></span></a></li>
                            </ul>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="widget ltn__search-widget ltn__newsletter-widget">
                            <h6 class="ltn__widget-sub-title">// subscribe</h6>
                            <h4 class="ltn__widget-title">Get Newsletter</h4>
                            <form action="#">
                                <input type="text" name="search" placeholder="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="ltn__newsletter-bg-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection
