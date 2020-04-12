<template>
  <div>
    <SpinnerGrow v-if="action_status==false" />

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
    this.$store.commit("GET_ACTIONS");
    this.$store.commit("GET_PROJECTS");
    this.$store.commit("GET_ACTORS");
    this.$store.commit("GET_TYPES");
    this.$store.commit("GET_STATUS");
    this.$store.commit("GET_ECHELLES");
  },

  computed: {

    action_status() {
      return this.$store.state.action.status;
    },



  }
};
</script>
