<template>
  <div>
    <SpinnerGrow v-if="project_status==false || actor_status==false" />

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
    project_status() {
      return this.$store.state.project.status;
    },

    actor_status() {
      return this.$store.state.actor.status;
    },

  }
};
</script>
