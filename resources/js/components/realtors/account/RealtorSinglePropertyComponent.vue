<template>
    <div v-if="!deleted" class="most-viewed-item">
        <div class="most-viewed-img">
            <a href="#">
                <img :src="'/photos/properties/'+ image1" alt="...">
            </a>
        </div>
        <div class="most-viewed-detail">
            <a class="category" href="#">
                <span class="list-bg aqua"><i class="icofont-hotel"></i></span>
                {{ property_type.name }}
            </a>
            <h3><a href="">{{ title }}</a></h3>
            <p class="list-address"><i class="icofont-google-map"></i>
                {{ address }}</p>
            <!--                                    <div class="views">Views : <span>325</span></div>-->
        </div>
        <div class="listing-button">
            <router-link
                class="btn v2"
                exact
                :to="{name: 'RealtorEditProperty', params: { id: property_id },}">
                <i class="ion-edit"></i> Edit </router-link>
            <a @click.prevent="deleteProperty" class="btn v5">
                <i class="ion-android-delete"></i> Delete</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'property_id',
            'property_type',
            'state',
            'title',
            'address',
            'description',
            'bedrooms',
            'living_rooms',
            'bathrooms',
            'cost',
            'image1',
            'image2',
            'image3',
            'image4',
            'image5',
            'features',
            'status'
        ],

        data(){
            return{
                deleted: false,
            }
        },
        methods: {
            deleteProperty: function(){

            }
        },

        mounted() {

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
