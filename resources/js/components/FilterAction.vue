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
            :options="option_ACTIONs"
             :value="$store.action_filter"
             @input="action_set_filter"
          />
        </b-col>

        <b-col xs="12" md="12" lg="6">
          <v-select placeholder="Les Contributeurs"
          :options="option_actors"
          :value="$store.action_filter"
          @input="action_set_filter"
          />
        </b-col>

      </b-row>

      <b-row class="mt2">
    <b-col xs="12" md="12" lg="3">
          <v-select
            placeholder="Status"
            :options="option_status"
             :value="$store.action_filter"
             @input="action_set_filter"
          />
        </b-col>

         <b-col xs="12" md="12" lg="3">
          <v-select
            placeholder="Type"
            :options="option_type"
             :value="$store.action_filter"
             @input="action_set_filter"
          />
        </b-col>

        <b-col xs="12" md="12" lg="3">
          <v-select
            placeholder="Echelle"
            :options="option_echelle"
             :value="$store.action_filter"
             @input="action_set_filter"
          />
        </b-col>

      </b-row>
    </div>

</template>

<script>
export default {
  name:"filterAction",
  data() {
    return {
        search:'',
    };
  },

  computed: {

    option_ACTIONs(){
        return this.$store.state.project.options;
    },
    option_actors(){
        return this.$store.state.actor.options;
    },
    option_status(){
        return this.$store.state.status.options;
    },
    option_type(){
        return this.$store.state.type.options;
    },
    option_echelle(){
        return this.$store.state.echelle.options;
    }

  },

  methods: {
    action_set_filter(value){
        this.$store.dispatch("FILTER_ACTION", value);
    },

    research(){
        //console.log(`DEBBUG ${this.search}`);
        if(this.search!=null && this.search.length > 2)
        {
            this.$store.dispatch("FIND_ACTION", this.search.trim());
        }
        else
        {
            this.$store.commit("SET_ACTION_DEFAULT");
        }
    }
  }
};
</script>

<style>

</style>
