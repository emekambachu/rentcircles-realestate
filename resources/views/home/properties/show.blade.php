@extends('home.includes.layout')

@section('title')
{{ $property->title }}
@endsection

@section('top-assets')

@endsection

@section('content')

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3 section-bg-2">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-overlay-theme-black-60"
                 style="background-image: url({{ asset('/main-assets/img/slider/12.jpg') }});
                background-size: cover; background-repeat: no-repeat;  background-position: center;
                background-attachment: fixed;">
                <div class="ltn__slide-item-inner text-center pt-100 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="ltn__breadcrumb-inner">
                                    <h1 class="page-title">Property Details</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <div id="app">
        <div class="ltn__slide-item-inner text-center" style="margin-top: -120px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-self-center">
                        <!--Home Search Component Laravel-->
                        <x-home.home-search></x-home.home-search>
                    </div>
                </div>
            </div>
        </div>

        <home-property-detail
            :property="{{ $property }}"
        ></home-property-detail>
    </div>


    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom"
         data-bs-bg="/main-assets/img/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking to rent an apartment?</h1>
                            <p>We can help you realize your new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="{{ route('properties') }}">
                                Explore apartments <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
@endsection

@section('bottom-assets')
@endsection
