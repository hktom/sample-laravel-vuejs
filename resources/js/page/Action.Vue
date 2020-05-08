<template>

<div class="ofhidden-x">
    <vue-headful
            title="PLAN BIODIVERSITÉ 2020-2023 DE LA STRATÉGIE BIODIVERSITÉ GENÈVE 2030"
            description="La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique."
        />

    <div>
       <HeaderPage/>

      <div class="pb10">

      <Baniere baniere="/img/bg-image.jpg" description="<strong>La biodiversité</strong> c’est notre assurance vie </br> face aux changements climatiques et une priorité pour réussir la<strong> transition écologique.</strong>" />

    <div class="w80 mauto mt3 vls-w75 ms-w95 ss-w95">
    <filterAction/>
    </div>

    <SpinnerGrow v-if="action_status==false" class="mt2" :small=true />

    <div v-else class="w80 mauto mt3 vls-w75 ms-w95 ss-w95">
        <div v-if="actions.length <=0 && action_status==false">
            <p class="text-center">Aucune action ne correspond à ces critères de recherche.</p>
        </div>

        <div v-else v-for="action in actions" :key="action.id">
            <CardBlog :article="action"/>
        </div>

    </div>
    <!-- w80 mauto mt3 vls-w75 ms-w95 ss-w95 ofhidden -->
    <div class="wauto" v-if="pagination">
        <pagination
        class="w80 mauto mt3 vls-w75 ms-w90 ss-w90"
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
        // customs pagination
        current_page:'',
        current_data:{},
    };
  },

  computed: {
    pagination(){
        return this.$store.state.action.pagination;
    },
    action_status() {
      return this.$store.state.action.status;
    },

    actions() {
      return this.$store.state.action.item;
    },

    pages() {
      return this.$store.state.action.actions;
    },
    //customs pagination
    total_pages(){
        var x=this.$store.state.action.item.length /10;
        return Math.floor(x);
    }

    //customs pagination
    //page_data(){
      //  for(var i=1;i<=10;i++){
        //}
    //}

  },

  methods: {
    //customs pages
    prev(){},

    next(){},

    to(p){},

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

.pagination{
  /* overflow: overlay !important; */
  display: flex !important;
  flex-wrap: wrap !important;
}

</style>
