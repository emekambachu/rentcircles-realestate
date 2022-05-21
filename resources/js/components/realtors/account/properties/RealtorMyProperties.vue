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
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        My Listings
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact
                            to="/realtor/property/add">
                            <i class="ion-plus-round"></i>Add Property
                        </router-link>
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
                            <realtor-single-property
                                v-for="property in properties" :key="property.id"
                                :property="property"
                            ></realtor-single-property>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import RealtorSingleProperty from "./RealtorSingleProperty";
    export default {
        components: {
            RealtorSingleProperty
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
