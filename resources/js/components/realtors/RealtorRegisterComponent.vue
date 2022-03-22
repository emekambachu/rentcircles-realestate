<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="account-login-inner">

                    <form method="post" class="ltn__form-box contact-form-box"
                          @submit.prevent="register">

                        <div v-if="errors.length !== 0" class="bg-danger p-1 text-light">
                            <p v-for="(value, key) in errors">
                                {{ value.toString() }}
                            </p>
                        </div>

                        <div class="input-item">
                            <input type="text" name="name" class="form-control"
                                   placeholder="Name*"  required
                                   v-model="form.name">
                            <strong v-if="errors.name">{{ errors.name.toString() }}</strong>
                        </div>

                        <div class="input-item">
                            <input type="email" name="email" class="form-control"
                                   placeholder="Email*" required
                                   v-model="form.email">
                            <strong v-if="errors.email">{{ errors.email.toString() }}</strong>
                        </div>

                        <div class="input-item">
                            <input type="text" name="mobile" class="form-control"
                                   placeholder="Mobile*" required
                                   v-model="form.mobile">
                            <strong v-if="errors.mobile">{{ errors.mobile.toString() }}</strong>
                        </div>

                        <div class="input-item">
                            <select class="nice-select" name="country"
                                    v-model="form.country">
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                            </select>
                            <strong v-if="errors.country">{{ errors.country.toString() }}</strong>
                        </div>

                        <div class="input-item">
                            <input type="password" name="password" class="form-control"
                                   placeholder="Password*" required
                                   v-model="form.password">
                            <strong v-if="errors.password">{{ errors.password.toString() }}</strong>
                        </div>

                        <div class="input-item">
                            <input type="password" name="password_confirmation"
                                   placeholder="Confirm Password*" required
                                   v-model="form.password_confirmation">
                        </div>

                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">SIGN UP</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Menu Widget -->
                    <div class="widget-2 ltn__menu-widget ltn__menu-widget-2 text-uppercase">
                        <ul>
                            <li><a href="">Have an account? Log in
                                <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="">Sign up as a user
                                <span><i class="fas fa-arrow-right"></i></span></a></li>
                        </ul>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search">
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
</template>

<script>
    export default {
        data(){
            return{
                form: {
                    name: '',
                    email: '',
                    mobile: '',
                    country: '',
                    password: '',
                    password_confirmation: '',
                },
                errors: [],
            }
        },
        methods:{
            register(){
                console.log(this.form)
                axios.post('/api/realtor/register/submit', this.form)
                    .then((response) => {
                        if(response.data.success){
                            console.log(response.data);
                        }else{
                            console.log(response.data.errors);
                            this.errors = response.data.errors;
                        }
                }).catch((error) => {
                    // this.errors = error.response.data.errors;
                    console.log(error);
                })
            },
        }
    }
</script>

<style scoped>

</style>
