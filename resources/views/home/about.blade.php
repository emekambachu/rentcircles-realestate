@extends('home.includes.layout')

@section('title')
    About
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
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-overlay-theme-black-60" style="background-image: url({{ asset('/main-assets/img/slider/12.jpg') }});
            background-size: cover; background-repeat: no-repeat;  background-position: center;
             background-attachment: fixed;">
                <div class="ltn__slide-item-inner text-center pt-100 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="ltn__breadcrumb-inner">
                                    <h1 class="page-title">About Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <div class="ltn__about-us-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset('/main-assets/img/others/7.png') }}" alt="About Us Image">
                        <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">

                            <div class="ltn__video-img ltn__animation-pulse1">
                                <img src="{{ asset('/main-assets/img/others/8.png') }}"
                                     alt="video popup bg image">
                                <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                                   href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0"
                                   data-rel="lightcase:myCollection">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                            <h1 class="section-title">The Leading Real Estate
                                Rental Marketplace<span>.</span></h1>
                            <p>Over 39,000 people work for us in more than 70 countries all over the
                                This breadth of global coverage, combined with specialist services</p>
                        </div>
                        <ul class="ltn__list-item-half clearfix">
                            <li>
                                <i class="flaticon-home-2"></i>
                                Smart Home Design
                            </li>
                            <li>
                                <i class="flaticon-mountain"></i>
                                Beautiful Scene Around
                            </li>
                            <li>
                                <i class="flaticon-heart"></i>
                                Exceptional Lifestyle
                            </li>
                            <li>
                                <i class="flaticon-secure"></i>
                                Complete 24/7 Security
                            </li>
                        </ul>
                        <div class="ltn__callout bg-overlay-theme-05  mt-30">
                            <p>"Enimad minim veniam quis nostrud exercitation <br>
                                llamco laboris. Lorem ipsum dolor sit amet" </p>
                        </div>
                        <div class="btn-wrapper animated">
                            <a href="" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            <div class="row ltn__custom-gutter---  justify-content-center">

                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('/main-assets/img/icons/icon-img/21.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="">Buy/Sell a Properties</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a class="ltn__service-btn" href="">Learn more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('/main-assets/img/icons/icon-img/22.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="">Rent an apartment</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a class="ltn__service-btn" href="">
                                Find more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

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
                        <h1><span class="counter animated fadeInDownBig">197</span><span class="counterUp-letter">K</span>
                            <span class="counterUp-icon">+</span> </h1>
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

    <div class="ltn__about-us-area section-bg-1 bg-image-right-before pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">
                                Building Facilities</h6>
                            <h1 class="section-title">Making living spaces
                                More Beautiful</h1>
                            <p>Over 39,000 people work for us in more than 70 countries all over the
                                This breadth of global coverage, combined with specialist services</p>
                        </div>
                        <ul class="ltn__list-item-half ltn__list-item-half-2 clearfix">
                            <li>
                                <i class="icon-done"></i>
                                Living rooms are pre-wired for Surround
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Luxurious interior design and amenities
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Nestled in the Buckhead Vinings communities
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Private balconies with stunning views
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                A rare combination of inspired architecture
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Outdoor grilling with dining court
                            </li>
                        </ul>
                        <div class="  ltn__animation-pulse2 text-center mt-30">
                            <a class="ltn__video-play-btn bg-white--- ltn__secondary-bg"
                               href="https://www.youtube.com/embed/HnbMYzdjuBs?autoplay=1&amp;showinfo=0"
                               data-rel="lightcase">
                                <i class="icon-play  ltn__secondary-color--- white-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__feature-area pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">features</h6>
                        <h1 class="section-title">Core Features</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6">
                        <div class="ltn__feature-icon">
                            <span><i class="flaticon-apartment"></i></span>
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="">Smart living</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6">
                        <div class="ltn__feature-icon">
                            <span><i class="flaticon-park"></i></span>
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="">ECO Construction</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6">
                        <div class="ltn__feature-icon">
                            <span><i class="flaticon-maps-and-location"></i></span>
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="">Atractive Location</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 active">
                        <div class="ltn__feature-icon">
                            <span><i class="flaticon-excavator"></i></span>
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="">Modern Technology</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom"
         data-bs-bg="{{ asset('/main-assets/img/1.jpg') }}">
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
