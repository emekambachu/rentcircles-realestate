import { createWebHistory, createRouter } from "vue-router";

import NotFound from './components/NotFoundComponent';
import RealtorDashboard from './components/realtors/account/RealtorDashboardComponent';

import RealtorMyProperties from "./components/realtors/account/RealtorMyPropertiesComponent";
import RealtorAddProperties from "./components/realtors/account/RealtorAddPropertiesComponent";

import RealtorProfile from "./components/realtors/account/RealtorProfileComponent";
import RealtorProfileEdit from "./components/realtors/account/RealtorProfileEditComponent";

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
        path: '/realtor/account',
        name: "RealtorDashboard",
        component: RealtorDashboard,
        beforeEnter: (to, from, next) => {
            axios.get('/api/authenticated').then(() => {
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
            axios.get('/api/authenticated').then(() => {
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
            axios.get('/api/authenticated').then(() => {
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
            axios.get('/api/authenticated').then(() => {
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
            axios.get('/api/authenticated').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/realtor/login';
            });
        }
    },


    // {
    //     path: '/account/dashboard',
    //     name: "AccountDashboard",
    //     component: Dashboard,
    //     beforeEnter: (to, from, next) => {
    //         axios.get('/api/authenticated').then(() => {
    //             next()
    //         }).catch(() => {
    //             return next({ name: 'Login' })
    //         });
    //     }
    // },
];

const router = createRouter({
    linkExactActiveClass: 'active',
    history: createWebHistory(),
    routes,
});

export default router;
