<template>
  <div class="pb10">
    <div id="baniere" class="w100 y15 relative">
      <div id="bg-image" class="fitme"></div>
      <div id="bg-text" class="absolute mt0">
        <div class="fitme p8">
          <h2 class="w75">
            La biodiversité c’est notre assurance vie
            face aux changements climatiques
            et une priorité pour réussir la transition écologique.
          </h2>
        </div>
      </div>
    </div>

    <div class="w80 mauto my-4">
      <div>
        <router-link :to="{name: 'Root'}" class="link-header current_link mx-3">Projets</router-link>
        <router-link :to="{name: 'Thematiques'}" class="link-header mx-3">Thèmes</router-link>
        <router-link :to="{name: 'Groupes'}" class="link-header mx-3">Structures académiques</router-link>
      </div>
    </div>

    <div class="w80 mauto my-2">
      <b-row>
        <b-col xs="12" lg="3">
          <!-- <input type="email" class="form-control py-0 my-0 py0 " id="exampleInputEmail1" aria-describedby="emailHelp"/> -->
          <b-input id="inline-form-input-name" style="height:34px" placeholder="Jane Doe" />
        </b-col>

        <b-col xs="12" md="12" lg="3">
          <v-select
            placeholder="Les champs d'application"
            :options="option_projects"
             :value="$store.project_selected"
             @input="project_set_Selected"
          />
        </b-col>

        <b-col xs="12" md="12" lg="3">
          <v-select placeholder="Les Contributeurs"
          :options="option_actors"
          :value="$store.project_selected"
          @input="project_set_Selected"
          />
        </b-col>

        <b-col xs="12" md="12" lg="3">
          <v-select placeholder="Etat d'action" :options="['Canada', 'United States']" />
        </b-col>
      </b-row>
    </div>

    <div class="w80 mauto mt3 ss-w100 ms-w100">

        <div v-for="article in articles">
            <CardBlog :article="article"/>
        </div>
      <!-- <h1>Number of clicks : {{ counter }}</h1>
      <h1>Double of clicks : {{ double }}</h1>
      <b-button @click="clicked">Click here</b-button> -->
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$store.commit("GET_PROJECTS");
    this.$store.commit("GET_ACTORS");
    //this.$store.commit("GET_ACTIONS");
    //this.$store.commit("SET_ARTICLE", '');
  },

  data() {
    return {

    };
  },

  computed: {
    articles(){
        return this.$store.state.articles;
    },
    counter() {
      return this.$store.state.counter;
    },
    double() {
      return this.$store.getters.doubleClicks;
    },

    option_projects(){
        return this.$store.state.project_options;
    },
    option_actions(){

    },
    option_actors(){
        return this.$store.state.actor_options;
    },

  },

  methods: {
    clicked() {
      //this.counter++;
      this.$store.commit("increment");
    },

    project_set_Selected(value){
        this.$store.dispatch("SET_ARTICLE_ACTION", value);
    }
  }
};
</script>

<style>
#bg-image {
  background-image: url("/img/wallapaper.jpg");
  background-position: bottom;
  background-size: cover;
  background-repeat: no-repeat;
  filter: blur(1px);
  -webkit-filter: blur(1px);
}
</style>
