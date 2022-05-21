<template>

    <!-- ltn__product-item -->
    <div class="col-lg-12">
        <div class="ltn__product-item ltn__product-item-4 text-center---">
            <div class="product-img">
                <a href="">
                    <img v-for="(photo, index) in property.property_photos"
                         :key="photo.id" class="center-cropped"
                         :src="'/photos/properties/'+photo.image"
                         :alt="property.title">
                </a>
                <div class="product-badge">
                    <ul>
                        <li class="sale-badge bg-green">{{ property.property_type.name }}</li>
                    </ul>
                </div>
                <div class="product-img-location-gallery">
                    <div class="product-img-location">
                        <ul>
                            <li>
                                <a href=""><i class="flaticon-pin"></i> {{ property.state.name }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-info">
                <div class="product-price">
                    <span>₦{{ addComma(property.cost) }}<label>/Year</label></span>
                </div>
                <h2 class="product-title"><a :href="'/property/'+property.id+'/detail'">
                    {{ property.title }}</a></h2>
                <div class="product-description">
                    <p>{{ property.address }}</p>
                </div>
                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                    <li><span>{{ property.bedrooms }} <i class="flaticon-bed"></i></span>
                        Bedrooms</li>
                    <li><span>{{ property.bathrooms }} <i class="flaticon-clean"></i></span>
                        Bathrooms</li>
                    <li><span>{{ property.living_rooms }} <i class="flaticon-dining-table-with-chairs"></i></span>
                        Living room</li>
                </ul>
            </div>
            <div class="product-info-bottom">
                <div class="real-estate-agent">
                    <div class="agent-img">
                        <a href=""><img src="/main-assets/img/blog/author.jpg" alt="#"></a>
                    </div>
                    <div class="agent-brief">
                        <h6><a href="">{{ property.realtor.name }}</a></h6>
                        <small>Estate Agents</small>
                    </div>
                </div>
                <div class="product-hover-action">
                    <ul>
                        <li>
                            <a :href="'/property/'+property.id+'/detail'" title="View Details">
                                <i class="flaticon-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                               data-bs-target="#liton_wishlist_modal">
                                <i class="flaticon-heart-1"></i></a>
                        </li>
                        <!--                        <li>-->
                        <!--                            <a href="" title="Product Details">-->
                        <!--                                <i class="flaticon-add"></i>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: {
            property: Object
        },

        data(){
            return{

            }
        },

        methods: {
            addComma(number){
                let parts = number.toString().split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts.join(".");
            }
        }
    }
</script>

<style scoped>

</style>
