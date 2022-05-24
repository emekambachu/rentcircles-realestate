<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>
                                        <router-link
                                            exact to="/realtor/account">
                                            Dashboard
                                        </router-link>
                                    </li>
                                    <li>Add Properties</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact to="/realtor/my-properties">
                            <i class="ion-ios-home"></i>My Properties
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
                            <h5><i class="ion-ios-location"></i> Add property</h5>
                        </div>

                        <div class="db-add-listing">

                            <div class="bg-danger text-white text-center p-2" v-if="errorAlert">
                                <p>{{ messageAlert }}</p>
                                <p v-for="(error, key) in errors" :key="key">
                                    {{ error.toString() }}
                                </p>
                            </div>

                            <p class="bg-success text-white text-center p-2" v-if="successAlert">
                                {{ messageAlert }}</p>

                            <form enctype="multipart/form-data" @submit.prevent="submitProperty">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Room Title</label>
                                            <input type="text" name="title"
                                                   class="form-control filter-input"
                                                    v-model="form.title">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="nice-select filter-input" name="property_type_id"
                                                    v-model="form.property_type_id">
                                                <option selected>Select</option>
                                                <option class="option" v-for="type in propertyTypes"
                                                        :key="type.id"
                                                        :value="type.id">
                                                    {{ type.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" name="cost" class="form-control filter-input"
                                                   v-model="form.cost">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Location</label>
                                            <select class="nice-select filter-input" name="property_type_id"
                                                    v-model="form.state_id">
                                                <option selected value="">Select</option>
                                                <option class="option" v-for="state in states"
                                                        :key="state.id"
                                                        :value="state.id">
                                                    {{ state.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control filter-input"
                                                   v-model="form.address">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Room Description</label>
                                            <ckeditor :editor="editor" v-model="form.description"
                                                      :config="editorConfig"></ckeditor>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedrooms</label>
                                            <input type="text" name="bedroom" required
                                                   class="form-control filter-input"
                                                   v-model="form.bedrooms">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathrooms</label>
                                            <input type="number" name="bathroom" required
                                                   class="form-control filter-input"
                                                   v-model="form.bathrooms">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Living Rooms</label>
                                            <input type="text" name="living_room" required
                                                   class="form-control filter-input"
                                                   v-model="form.living_rooms">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Square Feet</label>
                                            <input type="number" name="living_room" required
                                                   class="form-control filter-input"
                                                   v-model="form.square_feet">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Features</label>
                                            <div class="filter-checkbox">
                                                <input id="check-ac" type="checkbox" value="Air condition"
                                                       v-model="form.features">
                                                <label for="check-ac">Air condition</label>

                                                <input id="check-wf" type="checkbox" value="Wifi"
                                                       v-model="form.features">
                                                <label for="check-wf">Wi Fi</label>

                                                <input id="check-g" type="checkbox" value="Gym"
                                                       v-model="form.features">
                                                <label for="check-g">Gym</label>

                                                <input id="check-lr" type="checkbox" value="Laundry room"
                                                       v-model="form.features">
                                                <label for="check-lr">Laundry Room</label>

                                                <input id="check-i" type="checkbox" value="Internet"
                                                       v-model="form.features">
                                                <label for="check-i">Internet</label>

                                                <input id="check-pa" type="checkbox" value="Pets allowed"
                                                       v-model="form.features">
                                                <label for="check-pa">Pets Allowed</label>

                                                <input id="check-ch" type="checkbox" value="Central heating"
                                                       v-model="form.features">
                                                <label for="check-ch">Central heating</label>

                                                <input id="check-sp" type="checkbox" value="Swimming pool"
                                                       v-model="form.features">
                                                <label for="check-sp">Swimming pool</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="add-listing__input-file-box">
                                                <input class="add-listing__input-file" type="file"
                                                       name="file" id="file" multiple
                                                       @change="uploadImages">
                                                <div class="add-listing__input-file-wrap">
                                                    <i class="ion-ios-cloud-upload"></i>
                                                    <p>Click to upload your images</p>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <p v-if="imageValidation !== ''"
                                                   class="p-1 text-white text-center"></p>
                                                <div v-for="(image, index) in images" :key="index"
                                                     style="width:100px; margin-right:5px;"
                                                     class="text-center">
                                                    <img :src="image.src" :alt="image.file.name"
                                                         :title="image.file.name"/><br>
                                                    <i @click.prevent="removeImage(index)"
                                                       class="fa-duotone fa-x bg-danger text-white p-1"
                                                       title="remove"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn v8 mar-top-15">Submit Property</button>
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
    import CKEditor from '@ckeditor/ckeditor5-vue';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        components: {
            // Use the <ckeditor> component in this view.
            ckeditor: CKEditor.component
        },
        data(){
            return {
                editor: ClassicEditor,
                editorConfig: {

                },
                form: {
                    title: '',
                    property_type_id: '',
                    state_id: '',
                    address: '',
                    description: '',
                    bedrooms: '',
                    bathrooms: '',
                    living_rooms: '',
                    square_feet: '',
                    cost: '',
                    features: [],
                },
                images: [],
                states: [],
                propertyTypes: [],

                errors:[],
                successAlert: false,
                errorAlert: false,
                messageAlert: '',
            }
        },

        methods: {

            submitProperty: function(){
                // Install sweetalert2 to use
                // Loading
                Swal.fire({
                    title: 'Please Wait !',
                    html: 'Submitting',// add html attribute if you want or remove
                    allowOutsideClick: false,
                    showCancelButton: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                let formData = new FormData();
                // iterate form object
                let self = this; //you need this because *this* will refer to Object.keys below`
                //Iterate through each object field, key is name of the object field`
                Object.keys(this.form).forEach(function(key,index) {
                    console.log(key); // key
                    console.log(self.form[key]); // value
                    formData.append(key, self.form[key]);
                });

                for (let i = 0; i < this.images.length; i++) {
                    formData.append("images[]", this.images[i].file);
                }

                let config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                axios.post('/api/realtor/property/submit', formData, config)
                    .then((response) => {
                        if(response.data.success === true){
                            this.formSuccess(response)
                        }else{
                            this.formError(response)
                        }
                        this.messageAlert = response.data.message;
                        console.log(response.data.message);
                    }).catch((error) => {
                    console.log(error);
                });
            },

            // upload and preview image
            // uploadImage1: function(event){
            //     //Assign image and path to this variable
            //     this.form.image1 = event.target.files[0];
            //     // assign variable to the event image upload
            //     const file = event.target.files[0];
            //     // validate image
            //     this.validateImage(this.form.image1, file);
            //     // assign variable to the image preview
            //     this.form.image1preview = URL.createObjectURL(file);
            // },

            // upload and preview image
            uploadImages: function(event){
                // assign selected files to event array
                // loop through files and validate
                // Add to img object and push to images array
                let selectedFiles = event.target.files;
                for (let i = 0; i < selectedFiles.length; i++){
                    if(i >= 15 || this.images.length >= 15){// 15 images max
                        this.imageValidation = "15 images max";
                        return false;
                    }
                    this.validateImage(selectedFiles[i]);
                    let img = {
                        src: URL.createObjectURL(selectedFiles[i]),
                        file: selectedFiles[i],
                    }
                    this.images.push(img);
                }
            },

            removeImage(index){
                this.images.splice(index, 1);
            },

            // Validate image
            validateImage: function(file){
                console.log(file.type +' - '+ file.size);
                let fileType = ['image/png', 'image/jpg', 'image/jpeg']
                if(fileType.includes(file.type) === false){
                    this.errorAlert = true;
                    this.messageAlert = "Incorrect format for "+file.name;
                    return false;
                }else{
                    this.errorAlert = false;
                    this.messageAlert = '';
                }

                if(file.size > 5000000){
                    this.errorAlert = true;
                    this.messageAlert = "Image can't be greater than 3mb for"+file.name;
                    return false;
                }else{
                    this.errorAlert = false;
                    this.messageAlert = '';
                }
            },

            formSuccess: function(response){
                // Success alert
                Swal.fire({
                    icon: 'success',
                    title: 'Submitted',
                    showConfirmButton: true,
                    timer: 10500
                })
                let self = this; //you need this because *this* will refer to Object.keys below`
                //Iterate through each object field, key is name of the object field`
                Object.keys(this.form).forEach(function(value,index) {
                    self.form[value] = '';
                });
                this.features = [];
                this.images = [];
            },

            formError: function(response){
                this.errorAlert = true;
                this.errors = response.data.errors
            },

           getStates: function(){
               axios.get('/api/states')
                   .then((response) => {
                       response.data.success ? this.states = response.data.states : false;
                       console.log(response.data);
                   }).catch((error) => {
                   console.log(error);
               });
           },

            getPropertyTypes: function(){
                axios.get('/api/property/types')
                    .then((response) => {
                        response.data.success ? this.propertyTypes = response.data.property_types : false;
                        console.log(response.data);
                    }).catch((error) => {
                    console.log(error);
                });
            }

        },

        mounted(){
            this.getStates();
            this.getPropertyTypes();
        },

        created(){

        }
    }
</script>

<style scoped>

</style>
