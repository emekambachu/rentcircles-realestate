import { createWebHistory, createRouter } from "vue-router";

// Home
import Home from './components/home/HomeComponent';
import About from './components/home/AboutComponent';
import PrivacyPolicy from './components/home/PrivacyPolicyComponent';
import Terms from './components/home/TermsComponent';
import Faq from './components/home/FaqComponent';
import Contact from './components/home/ContactUsComponent';

import NotFound from './components/NotFoundComponent';

// Realtor Account
import RealtorRegisterComponent from './components/realtors/RealtorRegisterComponent';
import RealtorLoginComponent from './components/realtors/RealtorLoginComponent';
import RealtorDashboard from './components/realtors/account/RealtorDashboardComponent';
import RealtorMyProperties from "./components/realtors/account/RealtorMyPropertiesComponent";
import RealtorAddProperties from "./components/realtors/account/RealtorAddPropertiesComponent";
import RealtorProfile from "./components/realtors/account/RealtorProfileComponent";
import RealtorProfileEdit from "./components/realtors/account/RealtorProfileEditComponent";
import RealtorPropertyEdit from "./components/realtors/account/RealtorPropertyEditComponent";

const routes = [
    {
        // for urls that don't exist
        path: "/:catchAll(.*)",
        name: "NotFound",
        component: NotFound,
        meta: {
            requiresAuth: false
        }
    },

    {
        path: '/',
        name: "Home",
        component: Home
    },

    {
        path: '/about',
        name: "About",
        component: About
    },

    {
        path: '/privacy-policy',
        name: "PrivacyPolicy",
        component: PrivacyPolicy
    },

    {
        path: '/terms',
        name: "Terms",
        component: Terms
    },

    {
        path: '/faq',
        name: "FAQ",
        component: Faq
    },

    {
        path: '/contact',
        name: "ContactUs",
        component: Contact
    },

    {
        path: '/realtor/register',
        name: "RealtorRegister",
        component: RealtorRegisterComponent
    },

    {
        // This url route is ignored in web.php using /{any}
        // being rendered by server
        path: '/realtor/login',
        name: "RealtorLogin",
        component: RealtorLoginComponent,
        beforeRouteEnter: (to, from, next) => {
            axios.get('/api/realtor/authenticate').then(() => {
                window.location.href = '/realtor/account';
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },

    {
        // This url route is ignored in web.php using /{any}
        // being rendered by server
        path: '/realtor/account',
        name: "RealtorDashboard",
        component: RealtorDashboard,
        beforeEnter: (to, from, next) => {
            axios.get('/api/realtor/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },

    {
        path: '/realtor/account/my-properties',
        name: "RealtorMyProperties",
        component: RealtorMyProperties,
        beforeEnter: (to, from, next) => {
            axios.get('/api/realtor/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },

    {
        path: '/realtor/account/properties/add',
        name: "RealtorAddProperties",
        component: RealtorAddProperties,
        beforeEnter: (to, from, next) => {
            axios.get('/api/realtor/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },

    {
        path: '/realtor/account/property/:id/edit',
        name: "RealtorEditProperty",
        component: RealtorPropertyEdit,
        beforeEnter: (to, from, next) => {
            axios.get('/api/realtor/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },

    {
        path: '/realtor/account/profile',
        name: "RealtorProfile",
        component: RealtorProfile,
        beforeEnter: (to, from, next) => {
            axios.get('/api/realtor/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },

    {
        path: '/realtor/account/profile/edit',
        name: "RealtorProfileEdit",
        component: RealtorProfileEdit,
        beforeEnter: (to, from, next) => {
            axios.get('/api/realtor/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },

];

const router = createRouter({
    linkExactActiveClass: '',
    history: createWebHistory(),
    routes,
});

export default router;
