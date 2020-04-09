<template>
  <div class="pb10">

      <Baniere baniere="bg-image.jpg" description=" La biodiversité c’est notre assurance vie face aux changements climatiques et une priorité pour réussir la transition écologique." />

    <div class="w80 mauto mt3 mb3 ">
      <div id="menu-item" class="relative">
        <router-link :to="{name: 'Root'}" class="link-header current_link mx-3">Projets</router-link>
        <router-link :to="{name: 'Thematiques'}" class="link-header mx-3"> Actions</router-link>
        <router-link :to="{name: 'Groupes'}" class="link-header mx-3">Contributeurs</router-link>
      </div>
    </div>

    <FilterForm pageName="home"/>

    <div class="w80 mauto mt3 ss-w100 ms-w100">

        <div v-for="project in projects">
            <CardBlog @key="project.id" :article="project" v-scroll-reveal/>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    if(this.$store.state.project.status==false || this.$store.state.actor.status==false)
    {
    this.$store.commit("GET_PROJECTS");
    this.$store.commit("GET_ACTORS");
    //this.$store.commit("GET_ACTIONS");
    //this.$store.commit("SET_ARTICLE", '');
    }
  },

  data() {
    return {

    };
  },

  computed: {
    projects(){
        return this.$store.state.project.item;
    },
  },

  methods: {
      }
};
</script>

<style>

.link-header{text-transform: uppercase;color: #17A2B8;font-weight: bold;}
.current_link{background-color: #17A2B8; color: white; border-radius: 300px; padding: 7px 50px;}
.link-header:hover{text-decoration: none;color: #64C1CF;}
.current_link:hover{
    color: white;
}
#menu-item .current_link::after {
    content: "";
    border-top: 0.5em solid #17A2B8;
    border-left: 0.8em solid transparent;
    border-right: 0.8em solid transparent;
    position: absolute;
    left: calc(50% - 31.5em);
    /* left: 0; */
    top: 120%;
}
</style>
