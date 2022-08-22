<template>
    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90 mt-5">
        <div class="container-fluid">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">

                <div v-for="(photo, index) in property.property_photos" :key="photo.id" class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a :href="'/photos/properties/'+photo.image" data-rel="lightcase:myCollection">
                            <img class="center-cropped-w700h300"
                                 :src="'/photos/properties/'+photo.image" alt="Image">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
<!--                                <li class="ltn__blog-category">-->
<!--                                    <a href="#">Featured</a>-->
<!--                                </li>-->
                                <li class="ltn__blog-category">
                                    <a class="bg-orange" href="#">{{ property.property_type.name }}</a>
                                </li>
                                <li class="ltn__blog-category">
                                    <a class="bg-orange" href="#">{{ property.service }}</a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>
                                    Published: {{ fullDate(property.created_at) }}
                                </li>
<!--                                <li>-->
<!--                                    <a href="#"><i class="far fa-comments"></i>35 Comments</a>-->
<!--                                </li>-->
                            </ul>
                        </div>
                        <h1>{{ property.title }}</h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span>
                            {{ property.address }}, {{ property.state.name }}</label>
                        <h4 class="title-2">Description</h4>
                        <p v-html="property.description"></p>

                        <h4 class="title-2">Property Detail</h4>
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">
                            <ul>
                                <li><label>Rooms:</label> <span>{{ property.bedrooms }}</span></li>
                                <li><label>Baths:</label> <span>{{ property.bathrooms }}</span></li>
                                <li><label>Living rooms:</label> <span>{{ property.living_rooms }}</span></li>
                            </ul>
                            <ul>
                                <li><label>Square feet:</label> <span>{{ property.square_feet }} </span></li>
                            </ul>
                        </div>

                        <div v-if="property.features" class="property-details-amenities mb-60">
                            <h4 class="title-2 mb-10">Amenities</h4>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="ltn__menu-widget">
                                        <ul>
                                            <li v-for="(feature, index) in property.features.split(',')"
                                                :key="index">
                                                <label class="checkbox-item">{{ feature }}
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="property.map">
                            <h4 class="title-2">Location</h4>
                            <div class="property-details-google-map mb-60">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>

                        <div v-if="property.video">
                            <h4 class="title-2">Property Video</h4>
                            <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bs-bg="/main-assets/img/others/5.jpg">
                                <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                                   href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&amp;showinfo=0"
                                   data-rel="lightcase:myCollection">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>

<!--                        <div class="ltn__shop-details-tab-content-inner-&#45;&#45; ltn__shop-details-tab-inner-2 ltn__product-details-review-inner mb-60">-->
<!--                            <h4 class="title-2">Customer Reviews</h4>-->
<!--                            <div class="product-ratting">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
<!--                                    <li><a href="#"><i class="far fa-star"></i></a></li>-->
<!--                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <hr>-->
<!--                            &lt;!&ndash; comment-area &ndash;&gt;-->
<!--                            <div class="ltn__comment-area mb-30">-->
<!--                                <div class="ltn__comment-inner">-->
<!--                                    <ul>-->
<!--                                        <li>-->
<!--                                            <div class="ltn__comment-item clearfix">-->
<!--                                                <div class="ltn__commenter-img">-->
<!--                                                    <img src="/main-assets/img/testimonial/1.jpg" alt="Image">-->
<!--                                                </div>-->
<!--                                                <div class="ltn__commenter-comment">-->
<!--                                                    <h6><a href="#">Adam Smit</a></h6>-->
<!--                                                    <div class="product-ratting">-->
<!--                                                        <ul>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="far fa-star"></i></a></li>-->
<!--                                                        </ul>-->
<!--                                                    </div>-->
<!--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>-->
<!--                                                    <span class="ltn__comment-reply-btn">September 3, 2020</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="ltn__comment-item clearfix">-->
<!--                                                <div class="ltn__commenter-img">-->
<!--                                                    <img src="/main-assets/img/testimonial/3.jpg" alt="Image">-->
<!--                                                </div>-->
<!--                                                <div class="ltn__commenter-comment">-->
<!--                                                    <h6><a href="#">Adam Smit</a></h6>-->
<!--                                                    <div class="product-ratting">-->
<!--                                                        <ul>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="far fa-star"></i></a></li>-->
<!--                                                        </ul>-->
<!--                                                    </div>-->
<!--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>-->
<!--                                                    <span class="ltn__comment-reply-btn">September 2, 2020</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="ltn__comment-item clearfix">-->
<!--                                                <div class="ltn__commenter-img">-->
<!--                                                    <img src="img/testimonial/2.jpg" alt="Image">-->
<!--                                                </div>-->
<!--                                                <div class="ltn__commenter-comment">-->
<!--                                                    <h6><a href="#">Adam Smit</a></h6>-->
<!--                                                    <div class="product-ratting">-->
<!--                                                        <ul>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
<!--                                                            <li><a href="#"><i class="far fa-star"></i></a></li>-->
<!--                                                        </ul>-->
<!--                                                    </div>-->
<!--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>-->
<!--                                                    <span class="ltn__comment-reply-btn">September 2, 2020</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; comment-reply &ndash;&gt;-->
<!--                            <div class="ltn__comment-reply-area ltn__form-box mb-30">-->
<!--                                <form action="#">-->
<!--                                    <h4>Add a Review</h4>-->
<!--                                    <div class="mb-30">-->
<!--                                        <div class="add-a-review">-->
<!--                                            <h6>Your Ratings:</h6>-->
<!--                                            <div class="product-ratting">-->
<!--                                                <ul>-->
<!--                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="input-item input-item-textarea ltn__custom-icon">-->
<!--                                        <textarea placeholder="Type your comments...."></textarea>-->
<!--                                    </div>-->
<!--                                    <div class="input-item input-item-name ltn__custom-icon">-->
<!--                                        <input type="text" placeholder="Type your name....">-->
<!--                                    </div>-->
<!--                                    <div class="input-item input-item-email ltn__custom-icon">-->
<!--                                        <input type="email" placeholder="Type your email....">-->
<!--                                    </div>-->
<!--                                    <div class="input-item input-item-website ltn__custom-icon">-->
<!--                                        <input type="text" name="website" placeholder="Type your website....">-->
<!--                                    </div>-->
<!--                                    <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>-->
<!--                                    <div class="btn-wrapper">-->
<!--                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <h4 class="title-2">Related Properties</h4>-->
<!--                        <div class="row">-->
<!--                            &lt;!&ndash; ltn__product-item &ndash;&gt;-->
<!--                            <div class="col-xl-6 col-sm-6 col-12">-->
<!--                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center-&#45;&#45;">-->
<!--                                    <div class="product-img">-->
<!--                                        <a href=""><img src="/main-assets/img/product-3/1.jpg" alt="#"></a>-->
<!--                                        <div class="real-estate-agent">-->
<!--                                            <div class="agent-img">-->
<!--                                                <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-info">-->
<!--                                        <div class="product-badge">-->
<!--                                            <ul>-->
<!--                                                <li class="sale-badg">For Rent</li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                        <h2 class="product-title"><a href="">New Apartment Nice View</a></h2>-->
<!--                                        <div class="product-img-location">-->
<!--                                            <ul>-->
<!--                                                <li>-->
<!--                                                    <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                        <ul class="ltn__list-item-2-&#45;&#45; ltn__list-item-2-before-&#45;&#45; ltn__plot-brief">-->
<!--                                            <li><span>3 </span>Bedrooms</li>-->
<!--                                            <li><span>2 </span>Bathrooms</li>-->
<!--                                            <li><span>3450 </span>square Ft</li>-->
<!--                                        </ul>-->
<!--                                        <div class="product-hover-action">-->
<!--                                            <ul>-->
<!--                                                <li>-->
<!--                                                    <a href="#" title="Quick View" data-bs-toggle="modal"-->
<!--                                                       data-bs-target="#quick_view_modal">-->
<!--                                                        <i class="flaticon-expand"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"-->
<!--                                                       data-bs-target="#liton_wishlist_modal">-->
<!--                                                        <i class="flaticon-heart-1"></i></a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="" title="Compare">-->
<!--                                                        <i class="flaticon-add"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-info-bottom">-->
<!--                                        <div class="product-price">-->
<!--                                            <span>$349,00<label>/Month</label></span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; ltn__product-item &ndash;&gt;-->
<!--                            <div class="col-xl-6 col-sm-6 col-12">-->
<!--                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center-&#45;&#45;">-->
<!--                                    <div class="product-img">-->
<!--                                        <a href=""><img src="/main-assets/img/product-3/2.jpg" alt="#"></a>-->
<!--                                        <div class="real-estate-agent">-->
<!--                                            <div class="agent-img">-->
<!--                                                <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-info">-->
<!--                                        <div class="product-badge">-->
<!--                                            <ul>-->
<!--                                                <li class="sale-badg">For Sale</li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                        <h2 class="product-title"><a href="">New Apartment Nice View</a></h2>-->
<!--                                        <div class="product-img-location">-->
<!--                                            <ul>-->
<!--                                                <li>-->
<!--                                                    <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                        <ul class="ltn__list-item-2-&#45;&#45; ltn__list-item-2-before-&#45;&#45; ltn__plot-brief">-->
<!--                                            <li><span>3 </span>Bedrooms</li>-->
<!--                                            <li><span>2 </span>Bathrooms</li>-->
<!--                                            <li><span>3450 </span>square Ft</li>-->
<!--                                        </ul>-->
<!--                                        <div class="product-hover-action">-->
<!--                                            <ul>-->
<!--                                                <li>-->
<!--                                                    <a href="#" title="Quick View" data-bs-toggle="modal"-->
<!--                                                       data-bs-target="#quick_view_modal">-->
<!--                                                        <i class="flaticon-expand"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"-->
<!--                                                       data-bs-target="#liton_wishlist_modal">-->
<!--                                                        <i class="flaticon-heart-1"></i></a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="" title="Compare">-->
<!--                                                        <i class="flaticon-add"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-info-bottom">-->
<!--                                        <div class="product-price">-->
<!--                                            <span>$349,00<label>/Month</label></span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img v-if="property.realtor.image !== null"
                                     :src="'/photos/users/'+property.realtor.image" alt="Image">
                                <img v-else :src="'/images/user.png'" alt="Image">
                                <h5>{{ property.realtor.name }}</h5>
                            </div>
                        </div>

                        <!-- Form Widget -->
                        <div class="widget ltn__form-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Contact Realtor</h4>
                            <p v-if="successAlert !== ''" class="p-2 bg-success text-center text-white">
                                {{ successAlert }}
                            </p>
                            <form @submit.prevent="contactRealtor">
                                <input type="text" v-model="contact.name" placeholder="Your Name/Company*">
                                <input type="email" v-model="contact.email" placeholder="Your e-Mail*">
                                <textarea v-model="contact.message" placeholder="Write Message..."></textarea>
                                <button type="submit" class="btn theme-btn-1" :disabled="loading">
                                    <span v-if="loading">Loading.....</span>
                                    <span v-else>Send</span>
                                </button>
                            </form>
                        </div>

                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href=""><img src="/main-assets/img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
<!--    <div class="ltn__product-slider-area ltn__product-gutter pb-70 d-none">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="section-title-area ltn__section-title-2-&#45;&#45; text-center-&#45;&#45;">-->
<!--                        <h1 class="section-title">Related Properties</h1>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row ltn__related-product-slider-two-active slick-arrow-1">-->

<!--                &lt;!&ndash; ltn__product-item &ndash;&gt;-->
<!--                <div class="col-xl-6 col-sm-6 col-12">-->
<!--                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center-&#45;&#45;">-->
<!--                        <div class="product-img">-->
<!--                            <a href=""><img src="/main-assets/img/product-3/1.jpg" alt="#"></a>-->
<!--                            <div class="real-estate-agent">-->
<!--                                <div class="agent-img">-->
<!--                                    <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="product-info">-->
<!--                            <div class="product-badge">-->
<!--                                <ul>-->
<!--                                    <li class="sale-badg">For Rent</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <h2 class="product-title"><a href="">New Apartment Nice View</a></h2>-->
<!--                            <div class="product-img-location">-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <ul class="ltn__list-item-2-&#45;&#45; ltn__list-item-2-before-&#45;&#45; ltn__plot-brief">-->
<!--                                <li><span>3 </span>Bed</li>-->
<!--                                <li><span>2 </span>Bath</li>-->
<!--                                <li><span>3450 </span>Square Ft</li>-->
<!--                            </ul>-->
<!--                            <div class="product-hover-action">-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href="#" title="Quick View" data-bs-toggle="modal"-->
<!--                                           data-bs-target="#quick_view_modal">-->
<!--                                            <i class="flaticon-expand"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#" title="Wishlist" data-bs-toggle="modal"-->
<!--                                           data-bs-target="#liton_wishlist_modal">-->
<!--                                            <i class="flaticon-heart-1"></i></a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="" title="Compare">-->
<!--                                            <i class="flaticon-add"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="product-info-bottom">-->
<!--                            <div class="product-price">-->
<!--                                <span>$349,00<label>/Month</label></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                &lt;!&ndash; ltn__product-item &ndash;&gt;-->
<!--                <div class="col-xl-6 col-sm-6 col-12">-->
<!--                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center-&#45;&#45;">-->
<!--                        <div class="product-img">-->
<!--                            <a href=""><img src="/main-assets/img/product-3/2.jpg" alt="#"></a>-->
<!--                            <div class="real-estate-agent">-->
<!--                                <div class="agent-img">-->
<!--                                    <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="product-info">-->
<!--                            <div class="product-badge">-->
<!--                                <ul>-->
<!--                                    <li class="sale-badg">For Sale</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <h2 class="product-title"><a href="">New Apartment Nice View</a></h2>-->
<!--                            <div class="product-img-location">-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href=""><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <ul class="ltn__list-item-2-&#45;&#45; ltn__list-item-2-before-&#45;&#45; ltn__plot-brief">-->
<!--                                <li><span>3 </span>Bed</li>-->
<!--                                <li><span>2 </span>Bath</li>-->
<!--                                <li><span>3450 </span>Square Ft</li>-->
<!--                            </ul>-->
<!--                            <div class="product-hover-action">-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href="#" title="Quick View" data-bs-toggle="modal"-->
<!--                                           data-bs-target="#quick_view_modal">-->
<!--                                            <i class="flaticon-expand"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#" title="Wishlist" data-bs-toggle="modal"-->
<!--                                           data-bs-target="#liton_wishlist_modal">-->
<!--                                            <i class="flaticon-heart-1"></i></a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="" title="Compare">-->
<!--                                            <i class="flaticon-add"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="product-info-bottom">-->
<!--                            <div class="product-price">-->
<!--                                <span>$349,00<label>/Month</label></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                &lt;!&ndash;  &ndash;&gt;-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- PRODUCT SLIDER AREA END -->

</template>

<script>
    import moment from 'moment';
    export default {
        props: {
            property: Object,
        },
        data(){
            return{
                contact: {
                    realtor_id: this.property.realtor_id,
                    name: '',
                    email: '',
                    message: ''
                },
                loading: false,
                successAlert: '',
            }
        },
        methods: {
            contactRealtor(){
                console.log(this.contact);
                this.successAlert = '';
                let url = '/api/property/'+this.property.id+'/contact-realtor';
                axios.post(url, this.contact)
                    .then((response) => {
                        if(response.data.success === true){
                            this.loading = false;
                            this.successAlert = 'Message sent to realtor, We will contact you shortly.';
                            let self = this; //you need this because *this* will refer to Object.keys below`
                            //Iterate through each object field, key is name of the object field`
                            Object.keys(this.contact).forEach(function(value,index) {
                                self.contact[value] = '';
                            });
                        }else{
                            console.log(response.data.message);
                        }
                    }).catch((error) => {
                        console.log(error);
                    });
            },

            fullDate (value){
                return moment(value).format('MMMM Do YYYY, h:mm:ss a');
            }
        }
    }
</script>

<style scoped>

</style>
