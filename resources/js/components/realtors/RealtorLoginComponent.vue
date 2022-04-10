<template>
<!--    &lt;!&ndash; SLIDER AREA START (slider-3) &ndash;&gt;-->
<!--    <div class="ltn__slider-area ltn__slider-3 section-bg-2">-->
<!--        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">-->

<!--            &lt;!&ndash; ltn__slide-item &ndash;&gt;-->
<!--            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal-&#45;&#45; ltn__slide-item-3 bg-overlay-theme-black-60" style="background-image: url('/main-assets/img/slider/12.jpg');  background-size: cover; background-repeat: no-repeat;  background-position: center; background-attachment: fixed;">-->
<!--                <div class="ltn__slide-item-inner text-center">-->
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 align-self-center">-->
<!--                                <div class="ltn__breadcrumb-inner">-->
<!--                                    <h1 class="page-title mt-5">Realtor Login</h1>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->
<!--    &lt;!&ndash; SLIDER AREA END &ndash;&gt;-->

    <div class="ltn__contact-address-area mb-90 mt-40">
        <div id="login" class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="account-login-inner">

                    <div class="bg-danger text-white">
                        <p class="text-center"></p>
                    </div>

                    <form class="ltn__form-box contact-form-box" @submit.prevent="login">
                        <div class="input-item">
                            <p class="text-danger text-center m-0" v-if="errors.email">
                                {{ errors.email.toString() }}</p>
                            <input type="text" name="email"
                                   class="form-control"
                                   placeholder="Email*" required
                                   v-model="form.email">
                        </div>

                        <div class="input-item">
                            <p class="text-danger text-center m-0" v-if="errors.password">
                                {{ errors.password.toString() }}</p>
                            <input type="password" name="password"
                                   class="form-control"
                                   placeholder="Password*" required
                                   v-model="form.password">
                        </div>

                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">LOGIN</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">

                    <!-- Menu Widget -->
                    <div class="widget-2 ltn__menu-widget ltn__menu-widget-2 text-uppercase">
                        <ul>
                            <li>
                                <router-link
                                    class=""
                                    exact
                                    to="/realtor/register">No account? Sign up
                                    <span><i class="fas fa-arrow-right"></i></span>
                                </router-link>
                            </li>
                            <li>
                                <router-link
                                    class=""
                                    exact
                                    to="/register">Sign up as a user
                                    <span><i class="fas fa-arrow-right"></i></span>
                                </router-link>
                            </li>
                        </ul>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                form: {
                    email: '',
                    password: '',
                },
                errors: [],
                errorMessage: ''
            }
        },
        methods: {
            login(){
                console.log(this.form);
                axios.post('/api/realtor/login/submit', this.form)
                    .then((response) => {
                        response.data.success === true ? window.location.href = '/realtor/account' : false;
                        console.log(response.data);
                        response.data.success === false ? this.errors = response.data.errors : this.errors = [];
                    }).catch((error) => {
                    // this.errors = error.response.data.errors;
                    console.log(error);
                });
            },
        },

        computed() {

        },

        watch() {

        },

        mounted() {

        },

        created() {

        }
    }
</script>

<style scoped>

</style>
