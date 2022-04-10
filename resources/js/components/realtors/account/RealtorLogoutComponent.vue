<template>
    <a class="nav-link" @click.prevent="logout">
        <i class="ion-ios-person"></i>Logout</a>
</template>

<script>
    export default {
        methods: {
            logout() {
                console.log('logout');
                axios.get('api/realtor/account/logout')
                    .then((response) => {
                        window.location.href = '/realtor/login';
                    });
            }
        },
    }
</script>

<style scoped>

</style>
