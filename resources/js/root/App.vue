<template>
    <div class="pb5">
        <HeaderPage/>
        <!-- <router-link :to="{ name: '' }">Home</router-link> | -->
        <router-view></router-view>
    </div>
</template>
<script>
   // import HeaderPage from '../components/HeaderPage';
    export default {
        name:"App"
    }
</script>
