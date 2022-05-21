<template>
    <div v-if="!deleted" class="most-viewed-item">
        <div class="most-viewed-img">
            <a href="#">
                <img v-for="(photo, index) in property.property_photos.slice(0, 1)" :key="photo.id"
                     :src="'/photos/properties/'+ photo.image" alt="...">
            </a>
        </div>
        <div class="most-viewed-detail">
            <a class="category" href="#">
                <span class="list-bg aqua"><i class="icofont-hotel"></i></span>
                {{ property.property_type.name }}
            </a>
            <h3><a href="">{{ property.title }}</a></h3>
            <p class="list-address"><i class="icofont-google-map"></i>
                {{ property.address }}</p>
            <!--                                    <div class="views">Views : <span>325</span></div>-->
        </div>
        <div class="listing-button">
            <router-link
                class="btn v2"
                exact
                :to="{
                    name: 'RealtorEditProperty',
                    params: { id: property.id },
                }">
                <i class="ion-edit"></i> Edit </router-link>
                <a @click.prevent="deleteProperty" class="btn v5">
                    <i class="ion-android-delete"></i> Delete</a>
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
                deleted: false,
            }
        },
        methods: {
            deleteProperty: function(){
                // Install sweetalert2 to use
                Swal.fire({
                    title: 'Delete',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: 'Yes',
                    denyButtonText: `No`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        // Loading
                        Swal.fire({
                            title: 'Please Wait !',
                            html: 'Deleting',// add html attribute if you want or remove
                            allowOutsideClick: false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            didOpen: () => {
                                Swal.showLoading();
                            },
                        });
                        axios.delete('/api/realtor/property/'+this.id+'/delete')
                            .then((response) => {
                                response.data.success === true ? [
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted',
                                        showConfirmButton: true,
                                        timer: 10500
                                    }),
                                    this.deleted = true
                                ] : false;
                            }).catch((error) => {
                        });
                    } else if (result.isDenied) {
                        return false;
                    }
                });
            }
        },

        mounted() {

        },
    }
</script>

<style scoped>

</style>
