/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Default
require('./bootstrap');
import { createApp } from 'vue';
import router from './routes';
import axios from 'axios';
import VueAxios from 'vue-axios';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Local Components
import RealtorLoginComponent from './components/realtors/RealtorLoginComponent';
import RealtorRegisterComponent from './components/realtors/RealtorRegisterComponent';

import RealtorDashboardComponent from './components/realtors/account/RealtorDashboardComponent';
import RealtorMyPropertiesComponent from './components/realtors/account/RealtorMyPropertiesComponent';
import RealtorAddPropertiesComponent from './components/realtors/account/RealtorAddPropertiesComponent';
import RealtorProfileComponent from './components/realtors/account/RealtorProfileComponent';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

createApp({
    components: {
        RealtorRegisterComponent,
        RealtorLoginComponent,

        RealtorDashboardComponent,
        RealtorMyPropertiesComponent,
        RealtorProfileComponent,
        RealtorAddPropertiesComponent,
    }
}).use(router, axios, VueAxios).mount('#app');

