@extends('home.includes.layout')

@section('title')
    Contact us
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
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="ltn__breadcrumb-inner">
                                    <h1 class="page-title">Contact us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- SLIDER AREA END -->

    <div class="ltn__contact-address-area mb-90 mt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('main-assets/img/icons/10.png') }}" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">Email Address</h3>
                        <p>info@rentcircles.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('main-assets/img/icons/11.png') }}" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">Phone Number</h3>
                        <p>+0123-456789</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('main-assets/img/icons/12.png') }}" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">Office Address</h3>
                        <p>18/A, New Born Town Hall New York, US</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">Contact us</h4>
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select" style="display: none;">
                                            <option>Select Service Type</option>
                                            <option>Property Management </option>
                                            <option>Mortgage Service </option>
                                            <option>Consulting Service</option>
                                            <option>Home Buying</option>
                                            <option>Home Selling</option>
                                            <option>Escrow Services</option>
                                        </select><div class="nice-select" tabindex="0"><span class="current">Select Service Type</span><ul class="list"><li data-value="Select Service Type" class="option selected">Select Service Type</li><li data-value="Property Management" class="option">Property Management </li><li data-value="Mortgage Service" class="option">Mortgage Service </li><li data-value="Consulting Service" class="option">Consulting Service</li><li data-value="Home Buying" class="option">Home Buying</li><li data-value="Home Selling" class="option">Home Selling</li><li data-value="Escrow Services" class="option">Escrow Services</li></ul></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Enter message"></textarea>
                            </div>
                            <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">get a free service</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom mt-100"
         data-bs-bg="{{ asset('main-assets/img/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking to rent an apartment?</h1>
                            <p>We can help you realize your new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="">
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
