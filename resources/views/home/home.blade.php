@extends('home.includes.layout')

@section('title')
    Home
@endsection

@section('top-assets')
@endsection

@section('content')
    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-2">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">

            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="{{ asset('main-assets/img/slider/3.jpg') }}">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                               href="https://www.youtube.com/embed/tlThdr3O5Qo"
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
            <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="/main-assets/img/slider/12.jpg">
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
            <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="main-assets/img/slider/13.jpg">
                <div class="ltn__slide-item-inner  text-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h3 class="slide-sub-title white-color--- animated">
                                            <span><i class="fas fa-home"></i></span> Looking for a property to buy?</h3>
                                        <h3 class="slide-title animated">Let us guide you</h3>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
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

    <div class="ltn__slide-item-inner text-center" style="margin-top: -120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="slide-item-car-dealer-form">
                        <div class="ltn__car-dealer-form-tab">
                            <div class="ltn__tab-menu  text-uppercase text-center">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#ltn__form_tab_1_1">
                                        <i class="fas fa-home"></i>Rent</a>
                                    <a data-bs-toggle="tab" href="#ltn__form_tab_1_2" class="">
                                        <i class="fas fa-home"></i>Buy</a>
                                </div>
                            </div>
                            <div class="tab-content pb-10">
                                <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                    <div class="car-dealer-form-inner">
                                        <form action="#" class="ltn__car-dealer-form-box row">
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                <select class="nice-select">
                                                    <option>Property Type</option>
                                                    <option>Apartment</option>
                                                    <option>Co-op</option>
                                                    <option>Condo</option>
                                                    <option>Single Family Home</option>
                                                </select>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-3 col-md-6">
                                                <select class="nice-select">
                                                    <option>Location</option>
                                                    <option>chicago</option>
                                                    <option>London</option>
                                                    <option>Los Angeles</option>
                                                    <option>New York</option>
                                                    <option>New Jersey</option>
                                                </select>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                <select class="nice-select">
                                                    <option>Sub Location</option>
                                                    <option>Bayonne</option>
                                                    <option>Greenville</option>
                                                    <option>Manhattan</option>
                                                    <option>Queens</option>
                                                    <option>The Heights</option>
                                                    <option>Upper East Side</option>
                                                    <option>West Side</option>
                                                </select>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                <div class="btn-wrapper text-center mt-0">
                                                    <a href=""
                                                       class="btn theme-btn-1 btn-effect-1 text-uppercase">Search</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ltn__form_tab_1_2">
                                    <div class="car-dealer-form-inner">
                                        <form action="#" class="ltn__car-dealer-form-box row">
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                <select class="nice-select">
                                                    <option>Property Type</option>
                                                    <option>Apartment</option>
                                                    <option>Co-op</option>
                                                    <option>Condo</option>
                                                    <option>Single Family Home</option>
                                                </select>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-3 col-md-6">
                                                <select class="nice-select">
                                                    <option>Location</option>
                                                    <option>chicago</option>
                                                    <option>London</option>
                                                    <option>Los Angeles</option>
                                                    <option>New York</option>
                                                    <option>New Jersey</option>
                                                </select>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                <select class="nice-select">
                                                    <option>Sub Location</option>
                                                    <option>Bayonne</option>
                                                    <option>Greenville</option>
                                                    <option>Manhattan</option>
                                                    <option>Queens</option>
                                                    <option>The Heights</option>
                                                    <option>Upper East Side</option>
                                                    <option>West Side</option>
                                                </select>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                <div class="btn-wrapper text-center mt-0">
                                                    <a href=""
                                                       class="btn theme-btn-1 btn-effect-1 text-uppercase">Search</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                            <img src="/main-assets/img/icons/icon-img/21.png" alt="#">
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
                            <img src="/main-assets/img/icons/icon-img/22.png" alt="#">
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
    <div class="ltn__search-by-place-area section-bg-1 before-bg-top--- bg-image-top--- pt-115 pb-70"
         data-bs-bg="/main/assets/img/bg/20.jpg">
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

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h3 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h3>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-three-active slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href=""><img src="/main-assets/img/product-3/1.jpg" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href=""><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="">New Apartment Nice View</a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>
                                </div>
                                <div class="agent-brief">
                                    <h6><a href="">William Seklo</a></h6>
                                    <small>Estate Agents</small>
                                </div>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal"
                                           data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal"
                                           data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="" title="Product Details">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href=""><img src="/main-assets/img/product-3/2.jpg" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green---">For Sale</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href=""><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="">Modern Apartments</a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>
                                </div>
                                <div class="agent-brief">
                                    <h6><a href="">William Seklo</a></h6>
                                    <small>Estate Agents</small>
                                </div>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal"
                                           data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal"
                                           data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="" title="Product Details">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href=""><img src="/main-assets/img/product-3/3.jpg" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href=""><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="">Comfortable Apartment</a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>
                                </div>
                                <div class="agent-brief">
                                    <h6><a href="">William Seklo</a></h6>
                                    <small>Estate Agents</small>
                                </div>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal"
                                           data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal"
                                           data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="" title="Product Details">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href=""><img src="/main-assets/img/product-3/4.jpg" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href=""><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="">Luxury villa in Rego Park </a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>
                                </div>
                                <div class="agent-brief">
                                    <h6><a href="">William Seklo</a></h6>
                                    <small>Estate Agents</small>
                                </div>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal"
                                           data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal"
                                           data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="" title="Product Details">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href=""><img src="/main-assets/img/product-3/5.jpg" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href=""><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="">Beautiful Flat in Manhattan </a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>
                                </div>
                                <div class="agent-brief">
                                    <h6><a href="">William Seklo</a></h6>
                                    <small>Estate Agents</small>
                                </div>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal"
                                           data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal"
                                           data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="" title="Product Details">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- VIDEO AREA START -->
    <div class="ltn__video-popup-area ltn__video-popup-margin---">
        <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1"
             data-bs-bg="/main-assets/img/bg/1.jpg">
        </div>
    </div>
    <!-- VIDEO AREA END -->

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
@endsection
