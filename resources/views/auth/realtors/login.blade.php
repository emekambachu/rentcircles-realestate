@extends('home.includes.layout')

@section('title')
    Login
@endsection

@section('content')
    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3 section-bg-2">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-overlay-theme-black-60" style="background-image: url({{ asset('/main-assets/img/slider/12.jpg') }});
                background-size: cover; background-repeat: no-repeat;  background-position: center;
                background-attachment: fixed;">
                <div class="ltn__slide-item-inner text-center pt-100 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="ltn__breadcrumb-inner">
                                    <h1 class="page-title">Login</h1>
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
        <realtor-login-component></realtor-login-component>
    </div>
@endsection
