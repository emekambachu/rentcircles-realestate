<template>
    <!-- ltn__product-item -->
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
            <div class="product-img">
                <a :href="'/property/'+property.id+'/detail'">
                    <img v-for="(photo, index) in property.property_photos.slice(0,1)"
                         :key="photo.id" class="center-cropped"
                         :src="'/photos/properties/'+photo.image"
                         :alt="property.title">
                </a>
            </div>
            <div class="product-info">
                <div class="product-badge">
                    <ul>
                        <li class="">{{ property.property_type.name }}</li>
                        <li class="">{{ property.service }}</li>
                    </ul>
                </div>
                <h4 class="product-title">
                    <a :href="'/property/'+property.id+'/detail'">
                    {{ property.title }}</a>
                </h4>
                <div class="product-img-location">
                    <ul>
                        <li>
                            <a href=""><i class="flaticon-pin"></i>
                                {{ property.address }}, {{ property.state.name }}</a>
                        </li>
                    </ul>
                </div>
                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                    <li><span>{{ property.bedrooms }}</span> Bedrooms</li>
                    <li><span>{{ property.bathrooms }}</span> Bathrooms</li>
                    <li><span>{{ property.living_rooms }}</span> Living rooms</li>
                </ul>
                <div class="product-hover-action">
                    <ul>
                        <li><a :href="'/property/'+property.id+'/detail'" title="Quick View">
                            <i class="flaticon-expand"></i></a>
                        </li>
                        <li><a href="#" title="Wishlist">
                            <i class="flaticon-heart-1"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-info-bottom">
                <div class="product-price">
                    <span>₦{{ addComma(property.cost) }}<label>/Month</label></span>
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
