@extends('home.includes.layout')

@section('title')
    Home
@endsection

@section('top-assets')

@endsection

@section('content')
    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3 section-bg-2 height-600">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">

            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3  bg-overlay-theme-black-60 height-600"
                 style="background-image: url({{ asset('/main-assets/img/slider/3.jpg') }});
                 background-size: cover; background-repeat: no-repeat;
                 background-position: center; background-attachment: fixed; height: 600px;">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                               href=""
                                               data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h1 class="animated mt-40">
                                            Let us help you Find an apartment or property</h1>
                                        <div class="btn-wrapper animated">
                                            <a href=""
                                               class="theme-btn-1 btn btn-effect-1 border-radius-8">Make An Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-overlay-theme-black-60 height-600"
                 style="background-image: url({{ url('/main-assets/img/slider/12.jpg') }});  background-size: cover; background-repeat: no-repeat;  background-position: center; background-attachment: fixed;">
                <div class="ltn__slide-item-inner  text-right text-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h2 class="slide-sub-title white-color--- animated"><span>
                                                <i class="fas fa-home"></i></span> Rent an apartment with ease</h2>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="" class="theme-btn-1 btn btn-effect-1">
                                                Make An Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-overlay-theme-black-60 height-600"
                 style="background-image: url({{ url('/main-assets/img/slider/13.jpg') }});
                     background-size: cover; background-repeat: no-repeat;
                     background-position: center; background-attachment: fixed;">
                <div class="ltn__slide-item-inner  text-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h3 class="slide-sub-title white-color--- animated">
                                            <span><i class="fas fa-home"></i></span>
                                            Looking for a property to buy?</h3>
                                        <h3 class="slide-title animated">Let us guide you</h3>
{{--                                        <div class="slide-brief animated">--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--                                        </div>--}}
                                        <div class="btn-wrapper animated">
                                            <a href="" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!--Home Search Component Laravel-->
    <x-home.home-search></x-home.home-search>

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1--- pt-115 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h4 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h4>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">

                <div class="col-md-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('/main-assets/img/icons/icon-img/22.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="">Rent an apartment</a></h3>
                            <p>Find your desired apartment</p>
                            <a class="ltn__service-btn" href="{{ route('properties') }}">
                                Find more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('/main-assets/img/icons/icon-img/21.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="">Short let</a></h3>
                            <p>Get an apartment for a short term</p>
                            <a class="ltn__service-btn" href="{{ route('realtor.register') }}">
                                Find more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 section-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h3 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h3>
                    </div>
                </div>
            </div>
            <div id="app" class="row ltn__product-slider-item-three-active slick-arrow-1">
                @foreach($properties as $property)
                    <home-properties-item :property="{{ $property }}"></home-properties-item>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <div class="ltn__counterup-area section-bg-1 pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-select"></i>
                        </div>
                        <h1><span class="counter animated fadeInDownBig">560</span>
                            <span class="counterUp-icon">+</span> </h1>
                        <h6>Total Area Sq</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-office"></i>
                        </div>
                        <h1><span class="counter animated fadeInDownBig">197</span><span class="counterUp-letter">K</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Apartments Rented</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-excavator"></i>
                        </div>
                        <h1><span class="counter animated fadeInDownBig">268</span>
                            <span class="counterUp-icon">+</span> </h1>
                        <h6>Property sold</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-armchair"></i>
                        </div>
                        <h1><span class="counter animated fadeInDownBig">340</span>
                            <span class="counterUp-icon">+</span> </h1>
                        <h6>Properties available</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SEARCH BY PLACE AREA START (testimonial-7) -->
    <div class="ltn__search-by-place-area before-bg-top--- bg-image-top--- pt-115 pb-70"
         data-bs-bg="{{ asset('/main/assets/img/bg/20.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h3 class="section-subtitle section-subtitle-2 ltn__secondary-color">Property locations</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image"
                         data-bs-bg="/main-assets/img/location/1.jpg"
                         style="background-image: url(&quot;/main-assets/img/location/1.jpg&quot;);">
                        <div class="ltn__banner-info">
                            <h3 class="animated fadeIn"><a href=""> Lagos </a></h3>
                            <p> Great Deals Available</p>
                            <mark> 13 Listings</mark>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image"
                         data-bs-bg="/main-assets/img/location/2.jpg"
                         style="background-image: url(&quot;/main-assets/img/location/2.jpg&quot;);">
                        <div class="ltn__banner-info">
                            <h3 class="animated fadeIn"><a href="">Abuja</a></h3>
                            <p> Great Deals Available</p>
                            <mark> 13 Listings</mark>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image"
                         data-bs-bg="/main-assets/img/location/3.jpg"
                         style="background-image: url(&quot;/main-assets/img/location/3.jpg&quot;);">
                        <div class="ltn__banner-info">
                            <h3 class="animated fadeIn"><a href="">Port hacourt</a></h3>
                            <p> Great Deals Available</p>
                            <mark> 13 Listings</mark>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image"
                         data-bs-bg="/main-assets/img/location/4.jpg"
                         style="background-image: url(&quot;{{ asset('main-assets/img/location/4.jpg') }}&quot;);">
                        <div class="ltn__banner-info">
                            <h3 class="animated fadeIn"><a href="">Kaduna</a></h3>
                            <p> Great Deals Available</p>
                            <mark> 13 Listings</mark>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image"
                         data-bs-bg="/main-assets/img/location/5.jpg"
                         style="background-image: url(&quot;{{ asset('main-assets/img/gallery/9.jpg') }}&quot;);">
                        <div class="ltn__banner-info">
                            <h3 class="animated fadeIn"><a href="">Ibadan</a></h3>
                            <p> Great Deals Available</p>
                            <mark> 13 Listings</mark>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <a href=""
                       class="theme-btn-1 btn border-radius-8">Explore Locations</a>
                </div>
            </div>

        </div>
    </div>
    <!-- SEARCH BY PLACE AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    <div class="ltn__blog-area pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h3 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h3>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href=""><img src="/main-assets/img/blog/1.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="">10 Brilliant Ways To Decorate Your Home</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href=""><img src="/main-assets/img/blog/2.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="">The Most Inspiring Interior Design Of 2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href=""><img src="/main-assets/img/blog/3.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="">Recent Commercial Real Estate Transactions</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href=""><img src="/main-assets/img/blog/4.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Room</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href=""><img src="/img/blog/5.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title">
                                <a href="">7 home trends that will shape your house in 2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('main-assets/custom/scripts.js') }}" type="text/javascript"></script>
@endsection
