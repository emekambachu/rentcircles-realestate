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
import { createMetaManager, useMeta } from 'vue-meta'

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
import HomeComponent from './components/home/HomeComponent';
import AboutComponent from './components/home/AboutComponent';
import PrivacyPolicyComponent from './components/home/PrivacyPolicyComponent';
import TermsComponent from './components/home/TermsComponent';
import FaqComponent from './components/home/FaqComponent';
import ContactUsComponent from './components/home/ContactUsComponent';

import RealtorLoginComponent from './components/realtors/RealtorLoginComponent';
import RealtorRegisterComponent from './components/realtors/RealtorRegisterComponent';
import RealtorLogoutComponent from './components/realtors/account/RealtorLogoutComponent';

import RealtorDashboardComponent from './components/realtors/account/RealtorDashboardComponent';
import RealtorBioComponent from './components/realtors/account/RealtorBioComponent';

import RealtorMyPropertiesComponent from './components/realtors/account/RealtorMyPropertiesComponent';
import RealtorSinglePropertyComponent from './components/realtors/account/RealtorSinglePropertyComponent';
import RealtorAddPropertiesComponent from './components/realtors/account/RealtorAddPropertiesComponent';

import RealtorProfileComponent from './components/realtors/account/RealtorProfileComponent';
import RealtorProfileEditComponent from './components/realtors/account/RealtorProfileEditComponent';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

createApp({
    components: {
        HomeComponent,
        AboutComponent,
        PrivacyPolicyComponent,
        TermsComponent,
        FaqComponent,
        ContactUsComponent,

        RealtorRegisterComponent,
        RealtorLoginComponent,
        RealtorLogoutComponent,

        RealtorDashboardComponent,
        RealtorBioComponent,

        RealtorProfileComponent,
        RealtorProfileEditComponent,

        RealtorMyPropertiesComponent,
        RealtorSinglePropertyComponent,
        RealtorAddPropertiesComponent,
    }
}).use(
    router, axios, VueAxios, createMetaManager(), useMeta
).mount('#app');

