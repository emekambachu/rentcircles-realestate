import { createWebHistory, createRouter } from "vue-router";

import NotFound from './components/NotFoundComponent';

// Realtor Account
import RealtorDashboard from './components/realtors/account/RealtorDashboard';

// Properties
import RealtorMyProperties from "./components/realtors/account/properties/RealtorMyProperties";
import RealtorAddProperties from "./components/realtors/account/properties/RealtorAddProperties";
import RealtorPropertyEdit from "./components/realtors/account/properties/RealtorPropertyEdit";

// Profile
import RealtorProfile from "./components/realtors/account/profile/RealtorProfile";
import RealtorProfileEdit from "./components/realtors/account/profile/RealtorProfileEdit";


const routes = [
    {
        // for urls that don't exist
        path: "/:pathMatch(.*)*",
        name: "NotFound",
        component: NotFound,
        meta: {
            requiresAuth: false
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
        path: '/realtor',
        name: "RealtorDashboard2",
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
        path: '/realtor/my-properties',
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
        path: '/realtor/property/add',
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
        path: '/realtor/property/:id/edit',
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
        path: '/realtor/profile',
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
        path: '/realtor/profile/edit',
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

    {
        path: '/realtor/logout',
        name: "RealtorLogout",
        beforeEnter: (to, from, next) => {
            axios.get('/api/realtor/logout').then(() => {
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
