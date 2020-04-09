<template>
  <div class="pb10">
    <div id="baniere" class="w100 y15 relative ofhidden">
      <div id="bg-image" class="w100" style="height:110%"></div>
      <div id="bg-text" class="absolute mt0">
        <div class="fitme p8">
          <h2 class="w75 text-header">
            La biodiversité c’est notre assurance vie
            face aux changements climatiques
            et une priorité pour réussir la transition écologique.
          </h2>
        </div>
      </div>
    </div>

    <div class="w80 mauto mt3 mb3 ">
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
            <CardBlog :article="article" v-scroll-reveal/>
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
    if(this.$store.state.has_data_loaded==false)
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
  background-image: url("/img/bg-image.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  -webkit-filter: blur(4px );
      filter: blur(4px);
    transform: scale(1.1);
}

.text-header{color: white;text-shadow: 0 0 1em black;font-weight: normal;}

.link-header{text-transform: uppercase;color: #17A2B8;font-weight: bold;}
.current_link{background-color: #17A2B8; color: white; border-radius: 300px; padding: 7px 50px;}
.link-header:hover{text-decoration: none;color: #64C1CF;}
.link-header.current_link::after {
    content: "";
    border-top: 0.5em solid #026051;
    border-left: 0.8em solid transparent;
    border-right: 0.8em solid transparent;
    position: absolute;
    left: calc(50% - .8em);
    top: 100%;
}
</style>
