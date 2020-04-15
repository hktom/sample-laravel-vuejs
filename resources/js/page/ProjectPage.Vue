<template>
    <div>
        <SpinnerGrow v-if="action_status == false" />
        <div v-else>
            <HeaderPage />
            <div class="pb10">
                <Baniere
                    baniere="/img/bg-image.jpg"
                    description=" <b>La biodiversité</b> c’est notre assurance vie </br> face aux changements climatiques et une priorité pour réussir la transition <b>écologique.</b>"
                />

                <!-- <menuIndicator menu="projects" /> -->

                <div class="w80 mauto">
                    <h2 class="ml2 mt3" style="color:#05668D">
                        Liste des champs d'application
                    </h2>
                </div>

                <div class="w80 mauto">
                    <b-row>
                        <b-col
                            lg="4"
                            md="12"
                            class="my-3 y30"
                            v-for="project in projects"
                            :key="project.id"
                        >
                            <card :article="project" />
                        </b-col>
                    </b-row>
                </div>
            </div>
            <FooterPage />
        </div>
    </div>
</template>

<script>
import card from "../components/card";
import menuIndicator from "../components/menuIndicator";
export default {
    components: {
        card,
        menuIndicator
    },

    mounted() {
        if (this.status == false) {
            this.$store.commit("GET_PROJECTS");
        }
    },

    data() {
        return {};
    },

    computed: {
        projects() {
            return this.$store.state.project.item;
        },

        status() {
            return this.$store.state.project.status;
        }
    },

    methods: {
        getActions(page = 1) {
            return this.$store.dispatch("GET_ACTIONS", page);
        }
    }
};
</script>

<style></style>
