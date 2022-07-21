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
                            <template v-if="dataLoaded">
                                <realtor-property-item
                                    v-for="property in properties.data"
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

                        <laravel-vue-pagination class="justify-content-center"
                                                :limit="3"
                                                :data="properties"
                                                @pagination-change-page="getProperties"
                        >
                            <template #prev-nav>
                                <span>&lt; Previous</span>
                            </template>
                            <template #next-nav>
                                <span>Next &gt;</span>
                            </template>
                        </laravel-vue-pagination>

                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import RealtorPropertyItem from "./RealtorPropertyItem";
    import LaravelVuePagination from 'laravel-vue-pagination';
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
            LaravelVuePagination,
            ContentLoader,
            FacebookLoader,
            CodeLoader,
            BulletListLoader,
            InstagramLoader,
            ListLoader,
        },
        data(){
            return{
                properties: [],
                total: 0,
                dataLoaded: false,
            }
        },
        methods: {
            getProperties: function(page = 1){
                axios.get('/api/realtor/properties?page=' + page)
                    .then((response) => {
                        if(response.data.success === true){
                            this.properties = response.data.properties;
                            this.total = response.data.total;
                            this.dataLoaded = true;
                        }
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
        created() {

        }
    }
</script>

<style scoped>

</style>
