/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Default
require('./bootstrap');
import { createApp } from 'vue';
// SPA Router
import router from './routes';
// Axios api
import axios from 'axios';
import VueAxios from 'vue-axios';
// Moment time-stamp
import moment from 'moment';
// Sweet Alert
import Swal from 'sweetalert2';
window.Swal = Swal;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Home
import HomeSearchFilter from './components/home/HomeSearchFilter';
import HomeProperties from "./components/home/HomeProperties";
import HomePropertyDetail from "./components/home/HomePropertyDetail";

// Auth
import RealtorLoginComponent from './components/realtors/RealtorLoginComponent';
import RealtorRegisterComponent from './components/realtors/RealtorRegisterComponent';

// Profile
import RealtorDashboard from './components/realtors/account/RealtorDashboard';
import RealtorBio from './components/realtors/account/profile/RealtorBio';
import RealtorProfile from './components/realtors/account/profile/RealtorProfile';
import RealtorProfileEdit from './components/realtors/account/profile/RealtorProfileEdit';

import RealtorMyProperties from './components/realtors/account/properties/RealtorMyProperties';
import RealtorAddProperties from './components/realtors/account/properties/RealtorAddProperties';
import RealtorPropertyEdit from './components/realtors/account/properties/RealtorPropertyEdit';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

createApp({
    components: {
        HomeSearchFilter,
        HomeProperties,
        HomePropertyDetail,

        RealtorLoginComponent,
        RealtorRegisterComponent,

        RealtorDashboard,
        RealtorBio,
        RealtorProfile,
        RealtorProfileEdit,

        RealtorMyProperties,
        RealtorAddProperties,
        RealtorPropertyEdit,
    }
}).use(
    router, axios, VueAxios, moment
).mount('#app');

