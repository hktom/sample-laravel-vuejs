<template>
  <div>
    <SpinnerGrow v-if="has_data_loaded==false" />

    <div v-else>
      <HeaderPage />
      <router-view></router-view>
      <FooterPage />
    </div>
  </div>
</template>
<script>
export default {
  name: "App",
  mounted() {
    this.$store.commit("GET_PROJECTS");
    this.$store.commit("GET_ACTORS");
    //this.$store.commit("GET_ACTIONS");
    //this.$store.commit("SET_ARTICLE", '');
  },

  computed: {
    has_data_loaded() {
      return this.$store.state.has_data_loaded;
    }
  }
};
</script>
