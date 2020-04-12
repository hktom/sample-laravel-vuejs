<template>
  <div class="pb10">

      <Baniere baniere="bg-image.jpg" description=" La biodiversité c’est notre assurance vie face aux changements climatiques et une priorité pour réussir la transition écologique." />

      <menuIndicator menu="home"/>

    <filterAction/>

    <div class="w80 mauto mt3 ss-w100 ms-w100">

        <div v-for="action in actions">
            <CardBlog @key="action.id" :article="action"/>
        </div>
    </div>
  </div>
</template>

<script>
import filterAction from '../components/FilterAction';
import menuIndicator from '../components/menuIndicator';
export default {
components: {
    filterAction,
    menuIndicator
  },

  mounted() {
    if(this.$store.state.action.status==false)
    {
    this.$store.commit("GET_ACTIONS");
    this.$store.commit("GET_PROJECTS");
    this.$store.commit("GET_ACTORS");
    this.$store.commit("GET_TYPES");
    this.$store.commit("GET_STATUS");
    }
  },

  data() {
    return {

    };
  },

  computed: {
    actions(){
        return this.$store.state.action.item;
    },
  },

  methods: {
      }
};
</script>

<style>

</style>
