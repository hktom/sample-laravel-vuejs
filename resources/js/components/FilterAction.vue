<template>
    <div class="w100 my-3">
        <b-row class="px-3">
            <b-col cols="10">
                <h1 style="color:#05668D" class="fs1-8 ss-fs1 ms-fs1-4">
                    Liste des actions
                </h1>
            </b-col>
            <b-col cols="2">
                <b-button
                    @click="deselect(true)"
                    style="float:right"
                    variant="info"
                    v-b-tooltip.hover
                    title="Enlever tous les filtres"
                >
                    <font-awesome-icon icon="redo-alt" />
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
                    :class="filter['echelle'] ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Échelle"
                    :options="option_echelle"
                    :value="$store.state.action.filter.echelle"
                    @input="filter_echelle"
                />
            </b-col>

            <b-col xs="12" md="12" lg="6" class="my-2">
                <v-select
                    :class="filter['actor'] ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Acteurs"
                    :options="option_actors"
                    :value="$store.state.action.filter.actor"
                    @input="filter_actor"
                >
                <template v-slot:option="option">
                    <span> <b>{{ option.sigle }}</b> {{ option.title }} </span>
                </template>
                </v-select>
            </b-col>
        </b-row>

        <b-row class="px-3">
            <b-col xs="12" md="12" lg="3" class="my-2">
                <v-select
                    :class="filter['status'] ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Statut"
                    :options="option_status"
                    :value="$store.state.action.filter.status"
                    @input="filter_status"
                />
            </b-col>

            <b-col xs="12" md="12" lg="3" class="my-2">
                <v-select
                    :class="filter['type'] ? 'vue-select-active' : ''"
                    style="background-color:#F8F8F8"
                    placeholder="Type"
                    :options="option_type"
                    :value="$store.state.action.filter.type"
                    @input="filter_type"
                />
            </b-col>

            <b-col xs="12" md="12" lg="6" class="my-2">
                <v-select
                    :class="filter['project'] ? 'vue-select-active' : ''"
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
            filter: []
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
        deselect(all=false) {
            this.filter = {
                actor: false,
                project: false,
                status: false,
                type: false,
                echelle: false
            };
            this.reset_filter();
            all?this.search = null:'';
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
        filter_action(value, field, action) {
            if (value != null) {
                this.filter[field] = true;
                this.$store.dispatch("FILTER_ACTION", value);
            } else {
                this.filter[field] = false;
                this.$store.commit(action);
                this.$store.dispatch("FILTER_ACTION",value);

            }
        },

        filter_echelle(value) {
            this.filter_action(value, 'echelle', "RESET_FILTER_ECHELLE");
        },

        filter_status(value) {
            this.filter_action(value, 'status', "RESET_FILTER_STATUS");
        },

        filter_type(value) {
            this.filter_action(value, 'type', "RESET_FILTER_TYPE");
        },

        filter_actor(value) {
            this.filter_action(value, 'actor', "RESET_FILTER_ACTOR");
        },

        filter_project(value) {
            this.filter_action(value, 'project', "RESET_FILTER_PROJECT");
        },

        research() {
            if (this.search != null && this.search.length > 2) {
                //this.reset_filter();
                var payload = {
                    search: this.search,
                    page: 1,
                    type:'search',
                    label:'search',
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
