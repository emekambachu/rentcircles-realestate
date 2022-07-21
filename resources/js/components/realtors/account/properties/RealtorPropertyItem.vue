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
        <div class="listing-button mt-2">
            <router-link
                class="btn-sm mr-1 btn-warning text-white"
                exact
                :to="{
                    name: 'RealtorEditProperty',
                    params: { id: property.id },
                }">
                <i class="ion-edit"></i> Edit </router-link>

                <a @click.prevent="deleteProperty" href="" class="btn-sm mr-1 btn-danger text-white">
                    <i class="ion-android-delete"></i> Delete</a>

                <a @click.prevent="approveProperty" href="" class="btn-sm btn-info text-white">
                    <span v-if="published">
                        <i class="ion-android-checkmark-circle"></i> Hide</span>
                    <span v-else>
                        <i class="ion-android-checkmark-circle"></i> publish</span>
                </a>
        </div>
    </div>
</template>

<script>
    import moment from "moment";

    export default {
        props: {
            property: Object
        },

        data(){
            return{
                deleted: false,
                published: null,
            }
        },
        methods: {
            deleteProperty: function(){
                // Install sweetalert2 to use
                Swal.fire({
                    title: 'Delete?',
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
                        axios.delete('/api/realtor/property/'+this.property.id+'/delete')
                            .then((response) => {

                                if(response.data.success === true){
                                    const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 11000,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                        }
                                    });
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'Deleted'
                                    });
                                    this.deleted = true;
                                }

                            });
                    } else if (result.isDenied) {
                        return false;
                    }
                });
            },

            approveProperty: function(){
                // Install sweetalert2 to use
                Swal.fire({
                    title: this.published ? 'Hide '+this.property.title+'?' : 'Publish ' +this.property.title+'?',
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
                            allowOutsideClick: false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            didOpen: () => {
                                Swal.showLoading();
                            },
                        });
                        axios.post('/api/realtor/property/'+this.property.id+'/approve')
                            .then((response) => {
                                if(response.data.success === true){
                                    const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 11000,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                        }
                                    });
                                    Toast.fire({
                                        icon: 'success',
                                        title: response.data.status === 1 ? 'Published' : 'Hidden',
                                    });
                                    response.data.status === 1 ? this.published = true : this.published = false;
                                }

                            });
                    } else if (result.isDenied) {
                        return false;
                    }
                });
            },
            addComma(number){
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            },
            fullDate (value){
                return moment(value).format('MMMM Do YYYY, h:mm:ss a');
            }
        },

        mounted() {
            this.property.status === 1 ? this.published = true : this.published = false;
        },
    }
</script>

<style scoped>

</style>
