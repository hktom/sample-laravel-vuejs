<template>

<div>
    <SpinnerGrow v-if="action_status==false" />

    <div v-else>
       <HeaderPage />

      <div class="pb10">

      <Baniere baniere="/img/bg-image.jpg" description=" <strong>La biodiversité</strong> c’est notre assurance vie </br> face aux changements climatiques et une priorité pour réussir la transition <strong>écologique.</strong>" />

      <!-- <menuIndicator menu="home"/> -->

    <div class="w80 mauto">
        <h3 class="px-3 mt3" style="color:#05668D">Liste des actions</h3>
    </div>

    <filterAction/>

    <div class="w80 mauto mt3 ss-w100 ms-w100">

        <div v-if="actions.length <=0">
            <p class="text-center">Aucune action ne correspond à ces critères de recherche.</p>
        </div>

        <div v-else v-for="action in actions" :key="action.id">
            <CardBlog :article="action"/>
        </div>
    </div>

    <div class="w80 mauto mt3 ss-w100 ms-w100">
        <pagination
        align="center"
        size="default"
        :data="pages"
        @pagination-change-page="this.getActions">
        <span slot="prev-nav">
            <font-awesome-icon icon="chevron-left"/>
        </span>
	    <span slot="next-nav">
            <font-awesome-icon icon="chevron-right" />
        </span>
        </pagination>
    </div>

  </div>

  <FooterPage />
  </div>

</div>
</template>

<script>
import filterAction from "../components/FilterAction";
import menuIndicator from "../components/menuIndicator";
export default {
  components: {
    filterAction,
    menuIndicator,
  },

  mounted() {

    if(this.action_status==false)
    {
    this.$store.commit("GET_ALL_ACTIONS");
    this.$store.dispatch("GET_ACTIONS");
    this.$store.commit("GET_PROJECTS");
    this.$store.commit("GET_ACTORS");
    this.$store.commit("GET_TYPES");
    this.$store.commit("GET_STATUS");
    this.$store.commit("GET_ECHELLES");
    }
  },

  data() {
    return {
    };
  },

  computed: {
    action_status() {
      return this.$store.state.action.status;
    },

    actions() {
      return this.$store.state.action.item;
    },

    pages() {
      return this.$store.state.action.actions;
    },

  },

  methods: {
    getActions(page = 1) {
      return this.$store.dispatch("GET_ACTIONS", page);
    },
  },
};
</script>

<style>
.page-link {
    color: #05668D !important;
    transition: 0.2s;
}

.page-link:hover{
    color: #fff !important;
    background-color: #05668D !important;
    border-color: #05668D !important;
}

.page-item.active .page-link {
    color: #fff !important;
    background-color: #05668D !important;
    border-color: #05668D !important;
}

</style>
