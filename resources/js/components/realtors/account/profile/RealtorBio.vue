<template>
    <div class="account-img">
        <img v-if="user.image !== null"
             :src="'/photos/users/'+user.image" alt="" />
        <img v-else src="/images/user.png" alt="" />
    </div>
    <h4 class="name text-white">Howdy, {{ user.name }}</h4>
</template>

<script>
    export default {
        data(){
            return{
                user: {},
            }
        },

        methods: {
            loadBio(){
                axios.get('/api/realtor/authenticate').then((response) => {
                    this.user = response.data;
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
