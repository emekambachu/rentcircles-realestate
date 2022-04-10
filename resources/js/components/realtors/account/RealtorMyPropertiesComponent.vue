<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active">
                                        <a href="/realtor/account">Home</a>
                                    </li>
                                    <li>My Listings</li>
                                </ul>
                            </div>
                        </div>
                        <a class="btn v3" href="">
                            <i class="ion-plus-round"></i>Add Listing </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-activity my-listing">
                        <div class="act-title">
                            <h5><i class="ion-social-buffer-outline"></i> My Listings</h5>
                        </div>

                        <div class="viewd-item-wrap">
                            <realtor-single-property-component
                                v-for="property in properties" :key="property.id"
                                :property_id="property.id"
                                :property_type="property.property_type"
                                :state="property.state"
                                :title="property.title"
                                :address="property.address"
                                :description="property.description"
                                :bedrooms="property.bedrooms"
                                :bathrooms="property.bathrooms"
                                :living_rooms="property.living_rooms"
                                :cost="property.cost"
                                :image1="property.image1"
                                :image2="property.image2"
                                :image3="property.image3"
                                :image4="property.image4"
                                :image5="property.image5"
                                :features="property.features"
                                :status="property.status"
                            ></realtor-single-property-component>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import RealtorSinglePropertyComponent from "./RealtorSinglePropertyComponent";
    export default {
        components: {
            RealtorSinglePropertyComponent
        },
        data(){
            return{
                properties: [],
            }
        },
        methods: {
            getProperties: function(){
                axios.get('/api/realtor/properties')
                    .then((response) => {
                        response.data.success === true ? this.properties = response.data.properties : false;
                        console.log(response.data.properties);
                    }).catch((error) => {
                    console.log(error);
                });
            },
        },

        mounted() {
            this.getProperties();
        },

        computed() {

        },

        watch() {

        },

        created() {

        }
    }
</script>

<style scoped>

</style>
