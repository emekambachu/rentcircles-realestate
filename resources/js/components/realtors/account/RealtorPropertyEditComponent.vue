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
                            <div class="bg-danger text-white text-center p-2" v-if="errorAlert">
                                <p>{{ messageAlert }}</p>
                                <p v-for="(error, key) in errors" :key="key">
                                    {{ error.toString() }}
                                </p>
                            </div>

                            <p class="bg-success text-white text-center p-2" v-if="successAlert">
                                {{ messageAlert }}</p>

                            <p class="text-center p-2" v-show="formLoading">
                                <img src="/images/loader-gradient.gif" width="200"/>
                            </p>

                            <form enctype="multipart/form-data"
                                  @submit.prevent="updateProperty" v-if="!formLoading">
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
                                                        :value="type.id"
                                                :selected="type.id === form.property_type_id">
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Room Description</label>
                                            <textarea type="text" name="description"
                                                      class="form-control filter-input"
                                                      v-model="form.description"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bedrooms</label>
                                            <input type="text" name="bedroom" required
                                                   class="form-control filter-input"
                                                   v-model="form.bedrooms">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bathrooms</label>
                                            <input type="number" name="bathroom" required
                                                   class="form-control filter-input"
                                                   v-model="form.bathrooms">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Living Rooms</label>
                                            <input type="text" name="living_room" required
                                                   class="form-control filter-input"
                                                   v-model="form.living_rooms">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Features</label>
                                            <div class="filter-checkbox">
                                                <input id="check-ac" type="checkbox" value="air condition"
                                                       v-model="form.features">
                                                <label for="check-ac">Air condition</label>

                                                <input id="check-wf" type="checkbox" value="wifi"
                                                       v-model="form.features">
                                                <label for="check-wf">Wi Fi</label>

                                                <input id="check-g" type="checkbox" value="gym"
                                                       v-model="form.features">
                                                <label for="check-g">Gym</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="add-listing__input-file-box">
                                                <input class="add-listing__input-file" type="file"
                                                       name="file" id="file"
                                                       @change="uploadImage1">
                                                <div class="add-listing__input-file-wrap">
                                                    <i class="ion-ios-cloud-upload"></i>
                                                    <p>Click to upload your images</p>
                                                </div>
                                            </div>
                                            <img v-if="form.image1preview === null && form.image1 !== null"
                                                 :src="'/photos/properties/'+form.image1"
                                                 width="100"/>
                                            <img v-if="form.image1preview" :src="form.image1preview" width="100"/>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="add-listing__input-file-box">
                                                <input class="add-listing__input-file" type="file"
                                                       name="file" id="file"
                                                       @change="uploadImage2">
                                                <div class="add-listing__input-file-wrap">
                                                    <i class="ion-ios-cloud-upload"></i>
                                                    <p>Click to upload image</p>
                                                </div>
                                            </div>
                                            <img v-if="form.image2preview === null && form.image2 !== null"
                                                 :src="'/photos/properties/'+form.image2"
                                                 width="100"/>
                                            <img v-if="form.image2preview" :src="form.image2preview" width="100"/>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="add-listing__input-file-box">
                                                <input class="add-listing__input-file" type="file"
                                                       name="file" id="file"
                                                       @change="uploadImage3">
                                                <div class="add-listing__input-file-wrap">
                                                    <i class="ion-ios-cloud-upload"></i>
                                                    <p>Click to upload your images</p>
                                                </div>
                                            </div>
                                            <img v-if="form.image3preview === null && form.image3 !== null"
                                                 :src="'/photos/properties/'+form.image3"
                                                 width="100"/>
                                            <img v-if="form.image3preview" :src="form.image3preview" width="100"/>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="add-listing__input-file-box">
                                                <input class="add-listing__input-file" type="file"
                                                       name="file" id="file"
                                                       @change="uploadImage4">
                                                <div class="add-listing__input-file-wrap">
                                                    <i class="ion-ios-cloud-upload"></i>
                                                    <p>Click to upload your images</p>
                                                </div>
                                            </div>
                                            <img v-if="form.image4preview === null && form.image4 !== null"
                                                 :src="'/photos/properties/'+form.image4"
                                                 width="100"/>
                                            <img v-if="form.image4preview" :src="form.image4preview" width="100"/>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="add-listing__input-file-box">
                                                <input class="add-listing__input-file" type="file"
                                                       name="file" id="file"
                                                       @change="uploadImage5">
                                                <div class="add-listing__input-file-wrap">
                                                    <i class="ion-ios-cloud-upload"></i>
                                                    <p>Click here to upload your images</p>
                                                </div>
                                            </div>
                                            <img v-if="form.image5preview === null && form.image5 !== null"
                                                 :src="'/photos/properties/'+form.image5"
                                                 width="100"/>
                                            <img v-if="form.image5preview" :src="form.image5preview" width="100"/>
                                        </div>
                                    </div>

                                    <div class="col-12">
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
    export default {
        data(){
            return {
                form: {
                    title: '',
                    property_type_id: '',
                    state_id: '',
                    address: '',
                    description: '',
                    bedrooms: '',
                    bathrooms: '',
                    living_rooms: '',
                    cost: '',
                    features: [],
                    image1: null,
                    image1preview: null,
                    image2: null,
                    image2preview: null,
                    image3: null,
                    image3preview: null,
                    image4: null,
                    image4preview: null,
                    image5: null,
                    image5preview: null,
                },

                states: [],
                propertyTypes: [],

                errors:[],
                formLoading: false,
                successAlert: false,
                errorAlert: false,
                messageAlert: '',
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
                this.form.title = response.data.property.title;
                this.form.property_type_id = response.data.property.property_type_id;
                this.form.state_id = response.data.property.state_id;
                this.form.address = response.data.property.address;
                this.form.description = response.data.property.description;
                this.form.bedrooms = response.data.property.bedrooms;
                this.form.bathrooms = response.data.property.bathrooms;
                this.form.living_rooms = response.data.property.living_rooms;
                this.form.cost = response.data.property.cost;
                this.form.features = response.data.property.features.split(',');
                this.form.image1 = response.data.property.image1;
                this.form.image2 = response.data.property.image2;
                this.form.image3 = response.data.property.image3;
                this.form.image4 = response.data.property.image4;
                this.form.image5 = response.data.property.image5;
            },

            updateProperty: function(){
                this.formLoading = true;

                let formData = new FormData();
                formData.append("title", this.form.title);
                formData.append("property_type_id", this.form.property_type_id);
                formData.append("state_id", this.form.state_id);
                formData.append("address", this.form.address);
                formData.append("description", this.form.description);
                formData.append("bedrooms", this.form.bedrooms);
                formData.append("bathrooms", this.form.bathrooms);
                formData.append("living_rooms", this.form.living_rooms);
                formData.append("cost", this.form.cost);
                formData.append("features", this.form.features);

                if(this.form.image1){
                    formData.append("image1", this.form.image1);
                }
                if(this.form.image2){
                    formData.append("image2", this.form.image2);
                }
                if(this.form.image3){
                    formData.append("image3", this.form.image3);
                }
                if(this.form.image4){
                    formData.append("image4", this.form.image4);
                }
                if(this.form.image5){
                    formData.append("image5", this.form.image5);
                }

                let config = {
                    headers: {'content-type': 'multipart/form-data'}
                }
                console.log(this.form.title);
                axios.post('/api/realtor/property/'+ this.$route.params.id +'/update', formData, config)
                    .then((response) => {
                        response.data.success === true ? this.formSuccess(response) : this.formError(response);
                        this.messageAlert = response.data.message;
                        console.log(response.data.message);
                    }).catch((error) => {
                    console.log(error);
                }).finally(() => {
                    this.formLoading = false;
                });
            },

            formSuccess: function(response){
                this.successAlert = true;
            },

            formError: function(response){
                this.errorAlert = true;
                this.errors = response.data.errors
            },

            // upload and preview image
            uploadImage1: function(event){
                //Assign image and path to this variable
                this.form.image1 = event.target.files[0];
                // assign variable to the event image upload
                const file = event.target.files[0];
                // validate image
                this.validateImage(this.form.image1, file);
                // assign variable to the image preview
                this.form.image1preview = URL.createObjectURL(file);
            },
            uploadImage2: function(event){
                //Assign image and path to this variable
                this.form.image2 = event.target.files[0];
                // assign variable to the event image upload
                const file = event.target.files[0];
                // validate image
                this.validateImage(this.form.image2, file);
                // assign variable to the image preview
                this.form.image2preview = URL.createObjectURL(file);
            },
            uploadImage3: function(event){
                //Assign image and path to this variable
                this.form.image3 = event.target.files[0];
                // assign variable to the event image upload
                const file = event.target.files[0];
                // validate image
                this.validateImage(this.form.image3, file);
                // assign variable to the image preview
                this.form.image3preview = URL.createObjectURL(file);
            },
            uploadImage4: function(event){
                //Assign image and path to this variable
                this.form.image4 = event.target.files[0];
                // assign variable to the event image upload
                const file = event.target.files[0];
                // validate image
                this.validateImage(this.form.image4, file);
                // assign variable to the image preview
                this.form.image4preview = URL.createObjectURL(file);
            },
            uploadImage5: function(event){
                //Assign image and path to this variable
                this.form.image5 = event.target.files[0];
                // assign variable to the event image upload
                const file = event.target.files[0];
                // validate image
                this.validateImage(this.form.image5, file);
                // assign variable to the image preview
                this.form.image5preview = URL.createObjectURL(file);
            },

            // Validate image
            validateImage: function(img, file){
                console.log(img.type +' - '+ img.size);
                let fileType = ['image/png', 'image/jpg', 'image/jpeg']
                if(fileType.includes(file.type) === false){
                    img = null;
                    this.errorAlert = true;
                    this.messageAlert = "Incorrect format for "+file.name;
                    return false;
                }else{
                    this.errorAlert = false;
                    this.messageAlert = '';
                }

                if(img.size > 3000000){
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
