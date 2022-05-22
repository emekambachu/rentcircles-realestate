<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li class="active">
                                        <router-link
                                            exact to="/user">Dashboard
                                        </router-link>
                                    </li>
                                    <li>Edit Profile</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact to="/user/properties/add">
                            <i class="ion-plus-round"></i>Add Listing
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
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-person"></i> Profile Details :</h5>
                        </div>
                        <div class="db-add-listing">

                            <form @submit.prevent="updateProfile">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <div v-if="errors.length > 0"
                                             class="bg-danger p-1 text-white">
                                            {{ validationAlert }}
                                            <p v-for="(error, index) in errors" :key="index">
                                                {{ error }}
                                            </p>
                                        </div>
                                        <!-- Avatar -->
                                        <div class="edit-profile-photo">
                                            <img v-if="form.image === null && imageThumb === null"
                                                 src="/images/user.png" alt="">
                                            <img v-else-if="imageThumb !== null"
                                                 :src="imageThumb" alt="">
                                            <img v-else :src="'/photos/users/'+form.image" alt="">
                                            <div class="change-photo-btn">
                                                <div class="contact-form__upload-btn xs-left">
                                                    <input @change="uploadPhoto"
                                                           class="contact-form__input-file" type="file"
                                                           id="photo-upload">
                                                    <label for="photo-upload">
                                                        <i class="icofont-upload-alt"></i>
                                                        Upload Photo
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First name</label>
                                                    <input type="text" class="form-control filter-input"
                                                           v-model="form.name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control filter-input"
                                                           v-model="form.email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control filter-input"
                                                           v-model="form.mobile">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn v5">Update profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                form:{
                    name: '',
                    email: '',
                    mobile: '',
                    image: null,
                },
                imageThumb: null,
                validationAlert: '',
                errors: []
            }
        },
        methods: {
            uploadPhoto(event){
                //Assign image and path to this variable
                this.form.image = event.target.files[0];
                // validate image
                this.validateImage(this.form.image);
                // assign variable to the image preview
                this.imageThumb = URL.createObjectURL(event.target.files[0]);
            },

            // Validate image
            validateImage: function(file){
                console.log(file.type +' - '+ file.size);
                let fileType = ['image/png', 'image/jpg', 'image/jpeg']
                if(fileType.includes(file.type) === false){
                    this.validationAlert = "Incorrect format for "+file.name;
                    return false;
                }else{
                    this.validationAlert = '';
                }

                if(file.size > 3000000){
                    this.validationAlert = "Image can't be greater than 3mb for "+file.name;
                    return false;
                }else{
                    this.validationAlert = '';
                }
            },

            updateProfile(){
                // Install sweetalert2 to use
                // Loading
                Swal.fire({
                    title: 'Please Wait !',
                    html: 'Updating',// add html attribute if you want or remove
                    allowOutsideClick: false,
                    showCancelButton: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                let formData = new FormData();
                formData.append("name", this.form.name);
                formData.append("email", this.form.email);
                formData.append("mobile", this.form.mobile);
                if(this.form.imageThumb !== null){
                    formData.append("image", this.form.image);
                }

                let config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
                axios.post('/api/realtor/profile/update', formData, config)
                    .then((response) => {
                        if(response.data.success === true){
                            Swal.fire({
                                icon: 'success',
                                title: 'Submitted',
                                showConfirmButton: true,
                                timer: 10500
                            })
                        }else{
                            console.log(response.data.errors),
                            this.errors = response.data.errors,
                            Swal.fire({
                                icon: 'error',
                                title: 'Error updating profile',
                                showConfirmButton: true,
                                timer: 10500
                            })
                        }
                    }).catch((error) => {
                });
            },

        },
        mounted(){
            axios.get('/api/realtor/authenticate').then((response) => {
                this.form = response.data;
            });
        }
    }
</script>

<style scoped>

</style>
