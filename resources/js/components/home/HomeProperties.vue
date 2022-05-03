<template>
    <!-- ltn__product-item -->
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
            <div class="product-img">
                <a href="">
                    <img class="center-cropped" :src="'/photos/properties/'+property.image1"
                         :alt="property.title">
                </a>
                <div class="real-estate-agent">
                    <div class="agent-img">
                        <a href="">
                            <img src="/main-assets/img/blog/author.jpg" alt="#">
                        </a>
                    </div>
                </div>
            </div>
            <div class="product-info">
                <div class="product-badge">
                    <ul>
                        <li class="sale-badg">{{ property.property_type.name }}</li>
                    </ul>
                </div>
                <h2 class="product-title"><a :href="'/property/'+property.id+'/detail'">{{ property.title }}</a></h2>
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
                        <li><a href="" title="Product Details">
                                <i class="flaticon-add"></i></a>
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
