<template>
  <div class="pb10">

      <Baniere baniere="bg-image.jpg" description=" La biodiversité c’est notre assurance vie face aux changements climatiques et une priorité pour réussir la transition écologique." />

      <menuIndicator menu="home"/>

    <filterAction/>

    <div class="w80 mauto mt3 ss-w100 ms-w100">
        <pagination
        size="small"
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

    <div class="w80 mauto mt3 ss-w100 ms-w100">

        <div v-for="action in actions" :key="action.id">
            <CardBlog :article="action"/>
        </div>
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
  },

  data() {
    return {
    };
  },

  computed: {
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
    color: #17A2B8 !important;
    transition: 0.4s;
}

.page-link:hover{
    color: #fff !important;
    background-color: #17A2B8 !important;
    border-color: #17A2B8 !important;
}

.page-item.active .page-link {
    color: #fff !important;
    background-color: #17A2B8 !important;
    border-color: #17A2B8 !important;
}

</style>
