<template>
    <div class="">
        <HeaderPage/>
        <!-- <router-link :to="{ name: '' }">Home</router-link> | -->
        <router-view></router-view>

        <FooterPage/>
    </div>
</template>
<script>
   // import HeaderPage from '../components/HeaderPage';
    export default {
        name:"App"
    }
</script>
