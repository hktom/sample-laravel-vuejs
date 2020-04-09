<template>
    <div class="w80 mauto my-2">
      <b-row>
        <b-col xs="12" lg="3">
          <b-input id="inline-form-input-name" style="height:34px" placeholder="Mot clé, nom Entier"
          v-model="search"
          @input="research"
          />
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

        <b-col xs="12" md="12" lg="3" v-if="pageName=='actions'">
          <v-select placeholder="Etat d'action" :options="['Canada', 'United States']" />
        </b-col>
      </b-row>
    </div>

</template>

<script>
export default {
  props:["pageName"],
  data() {
    return {
        search:'',
    };
  },

  computed: {

    option_projects(){
        return this.$store.state.project.options;
    },
    option_actions(){

    },
    option_actors(){
        return this.$store.state.actor.options;
    },

  },

  methods: {
    project_set_Selected(value){
        this.$store.dispatch("FILTER_PROJECT", value);
    },

    research(){
        //console.log(`DEBBUG ${this.search}`);
        if(this.search!=null && this.search.length > 2)
        {
            this.$store.dispatch("FIND_PROJECT", this.search.trim());
        }
        else
        {
            this.$store.commit("SET_PROJECT_DEFAULT");
        }
    }
  }
};
</script>

<style>

</style>
