<template>
    <div>
        <SpinnerGrow v-if="action_status == false" />
        <div v-else>
            <HeaderPage />
            <div class="pb10">
                <Baniere
                    baniere="/img/bg-image.jpg"
                    description=" La biodiversité c’est notre assurance vie face aux changements climatiques et une priorité pour réussir la transition écologique."
                />

                <menuIndicator menu="projects" />

                <div class="w80 mauto">
                    <b-row>
                        <b-col
                            lg="4"
                            md="12"
                            class="my-3 y30"
                            v-for="project in projects"
                            :key="project.id"
                        >
                            <div v-scroll-reveal class="w100 h100">
                                <div class="card w100 h100 scala">
                                    <img
                                        :src="'uploads/' + project.image"
                                        class="card-img-top cover w100 h40"
                                        alt=""
                                    />
                                    <div class="card-body">
                                        <h4 class="card-title lighter">
                                            {{ project.name }}
                                        </h4>
                                        <p class="card-text">
                                            {{
                                                project.vision.slice(0, 200)
                                            }}[...]
                                        </p>
                                        <a href="#" class="btn btn-info btn-go"
                                            >Voir le project
                                            <font-awesome-icon
                                                icon="arrow-circle-right"
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </b-col>
                    </b-row>
                </div>
            </div>
            <FooterPage />
        </div>
    </div>
</template>

<script>
// import filterAction from "../components/FilterAction";
import menuIndicator from "../components/menuIndicator";
export default {
    components: {
        //filterAction,
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

<style>
.card {
    transition: 0.3s;
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
}
.scala:hover {
    transform: scale(1.01);
}

.btn-go {
    background-color: rgb(23, 162, 184);
    border: none !important;
    font-size: 0.9em;
    color: white !important;
    font-weight: bold !important;
    padding: 10px 20px !important;
    border-radius: 300px !important;
}

.btn-go:hover {
    background-color: rgb(7, 54, 61);
}
</style>
