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
                            to="/realtor/property/add">
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
                        <h2 class="counter-value">{{ total }}</h2>
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
                            <template v-if="dataLoaded">
                                <realtor-property-item
                                    v-for="property in recent_properties"
                                    :key="property.id"
                                    :property="property"
                                ></realtor-property-item>
                            </template>
                            <template v-else>
                                <ContentLoader
                                    :speed=2
                                    :animate=true
                                    width={400}
                                    height={160}
                                    viewBox="0 0 400 160"
                                    backgroundColor="#d9d9d9"
                                    foregroundColor="#ededed"
                                >
                                    <rect x="50" y="6" rx="4" ry="4" width="343" height="38" />
                                    <rect x="8" y="6" rx="4" ry="4" width="35" height="38" />
                                    <rect x="50" y="55" rx="4" ry="4" width="343" height="38" />
                                    <rect x="8" y="55" rx="4" ry="4" width="35" height="38" />
                                    <rect x="50" y="104" rx="4" ry="4" width="343" height="38" />
                                    <rect x="8" y="104" rx="4" ry="4" width="35" height="38" />
                                </ContentLoader>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Dashboard content ends-->
</template>

<script>
    import RealtorPropertyItem from "./properties/RealtorPropertyItem";
    import {
        ContentLoader,
        FacebookLoader,
        CodeLoader,
        BulletListLoader,
        InstagramLoader,
        ListLoader,
    } from 'vue-content-loader';

    export default {
        components: {
            RealtorPropertyItem,
            ContentLoader,
            FacebookLoader,
            CodeLoader,
            BulletListLoader,
            InstagramLoader,
            ListLoader,
        },
        data(){
            return {
                dataLoaded: false,
                recent_properties: [],
                total: 0
            }
        },
        methods: {
            propertyStats(){
                axios.get('/api/realtor/properties/stats')
                    .then((response) => {
                        if(response.data.success === true){
                            console.log(response.data.recent_properties);
                           this.recent_properties = response.data.recent_properties;
                           this.total = response.data.total_properties;
                           this.dataLoaded = true;
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
