<template>
    <div class="account-img">
        <img src="/admin-assets/images/clients/reviewer-4.png" alt="" />
    </div>
    <h4 class="name">Howdy, {{ realtor.name }}</h4>
</template>

<script>
    export default {
        data(){
            return{
                realtor: {
                    name: '',
                },
            }
        },

        methods: {
            loadBio(){
                axios.get('/api/realtor/authenticate').then((response) => {
                    this.realtor.name = response.data.name;
                });
            }
        },

        mounted(){
           this.loadBio();
        },
    }
</script>

<style scoped>

</style>
