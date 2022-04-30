<template>

    <div class="slide-item-car-dealer-form">
        <div class="ltn__car-dealer-form-tab">
            <div class="tab-content pb-10 mt-20">
                <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                    <div class="car-dealer-form-inner">

                        <form method="get" action="/properties/search" class="ltn__car-dealer-form-box row">
                            <input type="hidden" name="_token" :value="csrf_token" />
                            <div class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                <input type="text" placeholder="Search term or location" class="nice-select"
                                       name="term" v-model="form.term">
                            </div>

                            <div class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                <select class="nice-select" name="property_type_id"
                                        v-model="form.property_type_id">
                                    <option>Property Type</option>
                                    <option v-for="(type, index) in property_types" :key="type.id"
                                            :value="type.id">{{ type.name }}</option>
                                </select>
                            </div>

                            <div class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                <select class="nice-select" name="state_id" v-model="form.state_id">
                                    <option>State</option>
                                    <option v-for="(state, index) in states" :key="state.id"
                                            :value="state.id">{{ state.name }}</option>
                                </select>
                            </div>

                            <TransitionGroup name="fade">
                                    <div v-if="moreFilter"
                                         class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                        <select class="nice-select" name="bedrooms" v-model="form.bedrooms">
                                            <option>Number of bedrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <div v-if="moreFilter"
                                         class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                        <select class="nice-select" name="bathrooms">
                                            <option>Number of bathrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <div v-if="moreFilter"
                                         class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                        <select class="nice-select" name="living_rooms">
                                            <option>Number of living rooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <div v-if="moreFilter"
                                         class="ltn__car-dealer-form-item ltn__custom-icon col-lg-6 col-md-6">
                                        <select class="nice-select" name="max_cost">
                                            <option>Cost (Max)</option>
                                            <option value="200000">₦200,000</option>
                                            <option value="500000">₦500,000</option>
                                            <option value="700000">₦700,000</option>
                                            <option value="1000000">₦1000,000</option>
                                            <option value="2000000">₦2000,000</option>
                                        </select>
                                    </div>

                                    <div v-if="moreFilter"
                                         class="ltn__car-dealer-form-item ltn__custom-icon col-lg-6 col-md-6">
                                        <select class="nice-select" name="min_cost">
                                            <option>Cost (Min)</option>
                                            <option value="200000">₦200,000</option>
                                            <option value="500000">₦500,000</option>
                                            <option value="700000">₦700,000</option>
                                            <option value="1000000">₦1000,000</option>
                                            <option value="2000000">₦2000,000</option>
                                        </select>
                                    </div>
                            </TransitionGroup>

                            <div class="ltn__car-dealer-form-item ltn__custom-icon col-12 d-flex justify-content-center">
                                <i @click.prevent="toggleMoreFilter" title="More filter"
                                   class="fa fa-angle-down fa-2x text-left" :class="{'fa-angle-up': moreFilter}"
                                   style="margin-right: 20px;"></i>
                                <div class="btn-wrapper mt-0">
                                    <button type="submit" class="btn theme-btn-1 text-uppercase">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: {
            states: Object,
            property_types: Object,
            csrf_token: String
        },
        data(){
            return {
                form: {
                    term: '',
                    property_type_id: '',
                    state_id: '',
                    address: '',
                    bedrooms: '',
                    bathrooms: '',
                    living_rooms: '',
                    cost: '',
                },
                moreFilter: false,
            }
        },
        methods: {
            searchProperties(){
                axios.get('/api/properties/search')
                    .then((response) => {
                        response.data.success === true ? window.location = '/properties/search/results' : false;
                    }).catch((error) => {

                });
            },

            toggleMoreFilter(){
                this.moreFilter === false ? this.moreFilter = true : this.moreFilter = false
            },

        },
    }
</script>

<style scoped>
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.5s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }
</style>
