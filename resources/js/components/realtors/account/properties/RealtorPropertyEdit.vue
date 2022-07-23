<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                    <li>Add Listing</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact to="/realtor/account/my-properties">
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

                            <form enctype="multipart/form-data" @submit.prevent="updateProperty">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Room Title</label>
                                            <input type="text" class="form-control filter-input"
                                                   v-model="form.title">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Service</label>
                                            <select class="nice-select filter-input"
                                                    :class="{ input_danger: errors.service }"
                                                    v-model="form.service">
                                                <option :selected="form.service === 'rent'"
                                                        @click.prevent="is_shortLet = false"
                                                        value="rent">Rent</option>
                                                <option :selected="form.service === 'shortlet'"
                                                        @click.prevent="is_shortLet = true"
                                                        value="shortlet">Short Let</option>
                                            </select>
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
                                                        :value="type.id"
                                                :selected="type.id === form.property_type_id">
                                                    {{ type.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Cost</label>
                                            <input type="number" class="form-control filter-input"
                                                   v-model="form.cost">
                                        </div>
                                    </div>

                                    <div class="col-md-2" v-if="is_shortLet">
                                        <div class="form-group">
                                            <label>Cost Period</label>
                                            <select class="nice-select filter-input"
                                                    v-model="form.cost_period">
                                                <option selected>Select</option>
                                                <option value="year">Year</option>
                                                <option value="month">Month</option>
                                                <option value="week">Week</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Location</label>
                                            <select class="nice-select filter-input" name="property_type_id"
                                                    v-model="form.state_id">
                                                <option selected>Select</option>
                                                <option class="option" v-for="state in states"
                                                        :key="state.id"
                                                        :value="state.id"
                                                        :selected="state.id === form.state_id">
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
                                            <input type="number" name="living_room"
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Room Description</label>
                                            <ckeditor :editor="editor" v-model="form.description"
                                                      :config="editorConfig"></ckeditor>
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
                                                   class="text-danger text-center">{{ imageValidation }}</p>
                                                <div v-for="(image, index) in images" :key="index"
                                                     style="width:100px; margin-right:5px;"
                                                     class="text-center">
                                                    <img :src="image.file !== null ? image.src : '/photos/properties/'+image.src"/><br>
                                                    <i @click.prevent="removeImage(index, image.src)"
                                                       class="fa-duotone fa-x bg-danger text-white p-1"
                                                       :class="{ 'fa-spinner fa-spin': deletePhotoLoading}"
                                                       title="remove"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="bg-danger text-white text-center p-2" v-if="errorAlert">
                                            <p>{{ messageAlert }}</p>
                                            <p v-for="(error, key) in errors" :key="key">
                                                {{ error.toString() }}
                                            </p>
                                        </div>

                                        <p class="bg-success text-white text-center p-2" v-if="successAlert">
                                            {{ messageAlert }}</p>

                                        <button type="submit" class="btn v8 mar-top-15">Update Property</button>
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
                    service: '',
                    state_id: '',
                    address: '',
                    description: '',
                    bedrooms: '',
                    bathrooms: '',
                    living_rooms: '',
                    square_feet: '',
                    cost: '',
                    cost_period: '',
                    features: [],
                },

                images: [],
                deletePhotoLoading: false,

                states: [],
                propertyTypes: [],

                errors:[],
                successAlert: false,
                errorAlert: false,
                messageAlert: '',
                imageValidation: '',
            }
        },

        methods: {
            getCurrentProperty(){
                axios.get('/api/realtor/property/'+ this.$route.params.id +'/edit')
                    .then((response) => {
                        response.data.success === true ? this.populateForm(response) : false;
                        console.log(response.data.property);
                    }).catch((error) => {
                    console.log(error);
                });
            },

            populateForm(response){
                // populate form object
                let self = this; //you need this because *this* will refer to Object.keys below`
                //Iterate through each object field, key is name of the object field`
                Object.keys(response.data.property).forEach(function(key,index){
                    console.log(key); // key
                    console.log(response.data.property[key]); // value
                    if(key === 'features' && response.data.property[key] !== null){
                        self.form.features = response.data.property.features.split(',');
                    }else{
                        self.form[key] = response.data.property[key];
                    }
                });

                // populate images
                for (let i = 0; i < response.data.images.length; i++){
                    this.images.push({
                        src: response.data.images[i],
                        file: null
                    });
                }
                console.log(response.data.images);
            },

            updateProperty: function(){
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
                // iterate form object
                let self = this; //you need this because *this* will refer to Object.keys below`
                //Iterate through each object field, key is name of the object field`
                Object.keys(this.form).forEach(function(key,index){
                    console.log(key); // key
                    console.log(self.form[key]); // value
                    formData.append(key, self.form[key]);
                });

                for (let i = 0; i < this.images.length; i++) {
                    if(this.images[i].file !== null){
                        formData.append("images[]", this.images[i].file);
                    }
                }

                let config = {
                    headers: {'content-type': 'multipart/form-data'}
                }

                axios.post('/api/realtor/property/'+ this.$route.params.id +'/update', formData, config)
                    .then((response) => {
                        if(response.data.success === true){
                            this.formSuccess(response)
                        }else{
                            this.formError(response)
                        }
                        this.messageAlert = response.data.message;
                        console.log(response.data.message);
                        console.log(response.data.errors);
                    }).catch((error) => {
                    console.log(error);
                });
            },

            formSuccess: function(response){
                // Success alert
                Swal.fire({
                    icon: 'success',
                    title: 'Updated',
                    showConfirmButton: true,
                    timer: 10500
                })
            },

            formError: function(response){
                // Success alert
                Swal.fire({
                    icon: 'error',
                    title: 'Error occurred',
                    showConfirmButton: true,
                    timer: 10500
                })
                this.errorAlert = true;
                this.errors = response.data.errors
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

            removeImage(index, image){
                //delete photo from database
                this.deletePhotoLoading = true;
                axios.delete('/api/realtor/property/photo/'+image+'/delete')
                    .then((response) => {
                        if(response.data.success === true){
                            console.log(response.data.message);
                        }else{
                            console.log("Not deleted");
                        }
                    });
                // remove photo from array
                this.images.splice(index, 1);
                this.deletePhotoLoading = false;
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
            console.log('The id is: ' + this.$route.params.id);
            this.getStates();
            this.getPropertyTypes();
            this.getCurrentProperty();
        },

        created(){

        }
    }
</script>

<style scoped>

</style>
