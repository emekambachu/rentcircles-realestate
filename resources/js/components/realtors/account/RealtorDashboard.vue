<template>
    <!--Dashboard breadcrumb starts-->
    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active"><a href="#">Home</a></li>
                                    <li>Dashboard</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact
                            to="/realtor/properties/add">
                            <i class="ion-plus-round"></i>Add Listing
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Dashboard breadcrumb ends-->

    <!-- Dashboard Statistics starts-->
    <div class="statistic-wrap">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-4 col-12">
                    <div class="statistic__item item--green">
                        <h2 class="counter-value">{{ total_properties }}</h2>
                        <span class="desc">Submitted Properties</span>
                        <div class="icon">
                            <img src="/admin-assets/images/dashboard/map-of-roads.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="statistic__item item--blue">
                        <h2 class="counter-value">800</h2>
                        <span class="desc">Total Views</span>
                        <div class="icon">
                            <img src="/admin-assets/images/dashboard/bar-chart.png" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="statistic__item item--red">
                        <h2 class="counter-value">15</h2>
                        <span class="desc">Messages received</span>
                        <div class="icon">
                            <img src="/admin-assets/images/dashboard/like.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Statistics ends-->

    <!--Dashboard content starts-->
    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-listing">
                        <div class="act-title">
                            <h5><i class="icofont-eye-alt"></i>Recently Added</h5>
                        </div>
                        <div class="viewd-item-wrap">
                            <realtor-single-property
                                v-for="property in recent_properties" :key="property.id"
                                :property="property"
                            ></realtor-single-property>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Dashboard content ends-->
</template>

<script>
    import RealtorSingleProperty from "./properties/RealtorSingleProperty";
    export default {
        components: {
            RealtorSingleProperty
        },
        data(){
            return {
                recent_properties: [],
                total_properties: 0
            }
        },
        methods: {
            propertyStats(){
                axios.get('/api/realtor/properties/stats')
                    .then((response) => {
                        if(response.data.success === true){
                            console.log(response.data.recent_properties);
                           this.recent_properties = response.data.recent_properties;
                           this.total_properties = response.data.total_properties;
                        }
                    }).catch((error) => {
                    console.log(error);
                });
            },
        },

        mounted(){
            this.propertyStats();
        }
    }
</script>

<style scoped>

</style>
