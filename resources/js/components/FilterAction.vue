<template>
    <div class="w100 my-3">
        <b-row class="px-3">
            <b-col cols="10">
                <h1 style="color:#05668D" class="fs1-8 ss-fs1 ms-fs1-4">Liste des actions</h1>
            </b-col>
            <b-col cols="2">
                <b-button
                @click="deselect"
                style="float:right"
                variant="info"
                v-b-tooltip.hover
                title="Enlever tous les filtres"
                >
                 <font-awesome-icon icon="redo-alt"/>
                </b-button>
            </b-col>
        </b-row>
        <b-row class="px-3">
            <b-col xs="12" lg="3" class="my-2">
                <b-input
                    id="inline-form-input-name"
                    style="height:34px;background-color:#F8F8F8"
                    placeholder="Rechercher Action"
                    v-model="search"
                    @input="research"
                />
            </b-col>

            <b-col xs="12" md="12" lg="3" class="my-2">
                <v-select
                    :class="filter == 'echelle' ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Échelle"
                    :options="option_echelle"
                    :value="$store.state.action.filter.echelle"
                    @input="filter_echelle"
                />
            </b-col>

            <b-col xs="12" md="12" lg="6" class="my-2">
                <v-select
                    :class="filter == 'actor' ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Acteurs"
                    :options="option_actors"
                    :value="$store.state.action.filter.actor"
                    @input="filter_actor"
                />
            </b-col>
        </b-row>

        <b-row class="px-3">
            <b-col xs="12" md="12" lg="3" class="my-2">
                <v-select
                    :class="filter == 'status' ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Statut"
                    :options="option_status"
                    :value="$store.state.action.filter.status"
                    @input="filter_status"
                />
            </b-col>

            <b-col xs="12" md="12" lg="3" class="my-2">
                <v-select
                    :class="filter == 'type' ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Type"
                    :options="option_type"
                    :value="$store.state.action.filter.type"
                    @input="filter_type"
                />
            </b-col>

            <b-col xs="12" md="12" lg="6" class="my-2">
                <v-select
                    :class="filter == 'project' ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Champs d'application"
                    :options="option_projects"
                    :value="$store.state.action.filter.project"
                    @input="filter_project"
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
            filter: null
        };
    },

    computed: {
        option_projects() {
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
        }
    },

    methods: {
        deselect(){
            this.filter = null;
            this.reset_filter();
            this.search=null;
            this.$store.commit("SET_ACTION_DEFAULT");
        },
        reset_filter() {
            //reset others selections
            this.$store.commit("RESET_FILTER_STATUS");
            this.$store.commit("RESET_FILTER_TYPE");
            this.$store.commit("RESET_FILTER_ACTOR");
            this.$store.commit("RESET_FILTER_PROJECT");
            this.$store.commit("RESET_FILTER_ECHELLE");
        },
        filter_echelle(value) {
            if (value != null) {
                this.reset_filter();
                this.$store.dispatch("FILTER_ACTION", value);
                this.filter = "echelle";
            } else {
                this.filter = null;
                this.$store.commit("RESET_FILTER_ECHELLE");
                this.$store.commit("SET_ACTION_DEFAULT");
            }
        },

        filter_status(value) {
            if (value != null) {
                this.reset_filter();
                this.$store.dispatch("FILTER_ACTION", value);
                this.filter = "status";
            } else {
                this.filter = null;
                this.$store.commit("RESET_FILTER_STATUS");
                this.$store.commit("SET_ACTION_DEFAULT");
            }
        },

        filter_type(value) {
            if (value != null) {
                this.reset_filter();
                this.$store.dispatch("FILTER_ACTION", value);
                this.filter = "type";
            } else {
                this.filter = null;
                this.$store.commit("RESET_FILTER_TYPE");
                this.$store.commit("SET_ACTION_DEFAULT");
            }
        },

        filter_actor(value) {
            if (value != null) {
                this.reset_filter();
                this.$store.dispatch("FILTER_ACTION", value);
                this.filter = "actor";
            } else {
                this.filter = null;
                this.$store.commit("RESET_FILTER_ACTOR");
                this.$store.commit("SET_ACTION_DEFAULT");
            }
        },

        filter_project(value) {
            if (value != null) {
                this.reset_filter();
                this.$store.dispatch("FILTER_ACTION", value);
                this.filter = "project";
            } else {
                this.filter = null;
                this.$store.commit("RESET_FILTER_PROJECT");
                this.$store.commit("SET_ACTION_DEFAULT");
            }
        },

        // action_set_filter(value) {
        //   value!=null?
        //   this.$store.dispatch("FILTER_ACTION", value):
        //   this.$store.commit("SET_ACTION_DEFAULT");
        // },

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

            if (value != null) {
                this.$store.dispatch("SET_FILTER_BADGE", payload);
            } else {
                this.$store.dispatch("SET_FILTER_BADGE", "champ d'application");
            }
        },

        research() {
            if (this.search != null && this.search.length > 2) {
                 this.reset_filter();
                var payload={
                    'type':'search',
                    'code': this.search,
                    'page':1
                };
                //this.$store.dispatch("FIND_ACTION", this.search.trim());
                this.$store.dispatch("FIND_ACTION", payload);
            } else {
                this.$store.commit("SET_ACTION_DEFAULT");
            }
        }
    }
};
</script>

<style>
.vue-select-active {
    border: 4px solid #93c6fe;
    border-radius: 8px;
    margin-top: -3px;
}
</style>
