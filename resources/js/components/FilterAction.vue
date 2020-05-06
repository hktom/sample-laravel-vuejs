<template>
    <div class="w100">
      <b-row class="w80 mauto vls-w75 ms-w100 ss-w100">
        <b-col xs="12" lg="3" class="my-2">
          <b-input id="inline-form-input-name" style="height:34px;background-color:#F8F8F8" placeholder="Rechercher Action"
          v-model="search"
          @input="research"
          />
        </b-col>

        <b-col xs="12" md="12" lg="3" class="my-2">
          <v-select
          style="background-color:#F8F8F8"
            placeholder="Echelle"
            :options="option_echelle"
             :value="$store.state.action.filter.echelle"
             @input="action_set_filter"
             transition="fade"
          />
        </b-col>

        <b-col xs="12" md="12" lg="6" class="my-2">
          <v-select
          style="background-color:#F8F8F8"
          placeholder="Les Contributeurs"
          :options="option_actors"
          :value="$store.state.action.filter.actor"
          @input="action_set_filter"
          />
        </b-col>

      </b-row>

      <b-row class="w80 mauto vls-w75 ms-w100 ss-w100">
    <b-col xs="12" md="12" lg="3" class="my-2">
          <v-select
            style="background-color:#F8F8F8"
            placeholder="Status"
            :options="option_status"
             :value="$store.state.action.filter.status"
             @input="action_set_filter"
          />
        </b-col>

         <b-col xs="12" md="12" lg="3" class="my-2">
          <v-select
            style="background-color:#F8F8F8"
            placeholder="Type"
            :options="option_type"
             :value="$store.state.action.filter.type"
             @input="action_set_filter"
          />
        </b-col>


         <b-col xs="12" md="12" lg="6" class="my-2">
          <v-select
            style="background-color:#F8F8F8"
            placeholder="Les champs d'application"
            :options="option_ACTIONs"
             :value="$store.state.action.filter.project"
             @input="action_set_filter"
          />
        </b-col>

      </b-row>
    </div>

</template>

<script>
export default {
  name: "filterAction",
  data() {
    return {
      search: "",
    };
  },

  computed: {
    option_ACTIONs() {
      return this.$store.state.project.options;
    },
    option_actors() {
      return this.$store.state.actor.options;
    },
    option_status() {
      return this.$store.state.status.options;
    },
    option_type() {
      return this.$store.state.types.options;
    },
    option_echelle() {
      return this.$store.state.echelle.options;
    },
  },

  methods: {
    action_set_filter(value) {
        //this.set_badge(value);
      value!=null?
      this.$store.dispatch("FILTER_ACTION", value):
      this.$store.commit("SET_ACTION_DEFAULT");
    },

    set_badge(value) {
      let payload = "";
      switch (value.type) {
        case "actor":
          payload = `Acteur ${value.label}`;
          break;

        case "project":
          payload = `champ d'application ${value.label}`;
          break;

        default:
          payload = `${value.type} ${value.label}`;
          break;
      }

      if(value!=null)
      {
          this.$store.dispatch("SET_FILTER_BADGE", payload);
      }
      else
      {
          this.$store.dispatch("SET_FILTER_BADGE", "champ d'application");
      }
    },

    research() {
      if (this.search != null && this.search.length > 2) {
        this.$store.dispatch("FIND_ACTION", this.search.trim());
      } else {
        this.$store.commit("SET_ACTION_DEFAULT");
      }
    },
  },
};
</script>

<style>
</style>
