<template>
    <div>
        <SpinnerGrow v-if="action_status == false" />

        <div v-else>
            <HeaderPage />
            <div>
                <Baniere
                :baniere="'/uploads/'+action.project.image"
                :btnback="true" />

                <div class="w75 mauto my-5">
                    <b-row>
                        <b-col lg="8" md="12">
                            <h2 :style="'color:' + action.project.color">
                                Action {{ action.code }} <br />
                                {{ action.name }}
                            </h2>

                            <h5 style="color:#17A2B8" class="my-4">
                                Description
                            </h5>
                            <div v-html="action.description"></div>
                            <h5 style="color:#17A2B8" class="my-4">
                                Indicateur
                            </h5>
                            <p>{{ action.indicator }}</p>

                            <h5 style="color:#17A2B8" class="my-4">
                                Calendrier Prévu
                            </h5>

                            <ActionCalendar :items="action.calendars"/>
                            <ActionTable
                            class="my-4"
                            :fields="action.projects"
                            :actions="action.actions_link"
                            />

                        </b-col>

                        <b-col lg="4" md="12">
                            <div>
                                <img
                                    :src="'/uploads/' + action.project.icon"
                                    class="x10 cover"
                                />
                            </div>

                            <h5 style="color:#17A2B8" class="my-4">
                                Organisation de l'action
                            </h5>

                            <div>
                                <b-card bg-variant="default">
                                    <b-card-text>
                                        <div>
                                            <span class="bold"
                                                >Elaborée par:</span
                                            >
                                            <u
                                                v-for="item in action.authors"
                                                :key="item.id"
                                            >
                                                <li class="inline-block mx-1">
                                                    {{ item.name }},
                                                </li>
                                            </u>
                                        </div>

                                        <div>
                                            <span class="bold"
                                                >En collaboration avec:</span
                                            >
                                            <u
                                                v-for="item in action.collaborators"
                                                :key="item.id"
                                            >
                                                <li class="inline-block mx-1">
                                                    {{ item.name }},
                                                </li>
                                            </u>
                                        </div>
                                    </b-card-text>
                                </b-card>
                            </div>

                            <h5 style="color:#17A2B8" class="my-4">
                                Caracteristiques de l'action
                            </h5>

                            <div>
                                <b-card bg-variant="default">
                                    <b-card-text>
                                        <ul class="list-none list-inside">
                                            <li class="bold">
                                                Type d'action
                                                <ul
                                                    v-for="item in action.types"
                                                    :key="item.id"
                                                    class="list-none list-inside"
                                                >
                                                    <li class="lighter">
                                                        {{ item.name }}
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="bold">
                                                Status
                                                <ul
                                                    v-for="item in action.states"
                                                    :key="item.id"
                                                    class="list-none list-inside"
                                                >
                                                    <li class="lighter">
                                                        {{ item.name }}
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="bold">
                                                Echelle
                                                <ul
                                                    v-for="item in action.echelles"
                                                    :key="item.id"
                                                    class="list-none list-inside"
                                                >
                                                    <li class="lighter">
                                                        {{ item.name }}
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </b-card-text>
                                </b-card>
                            </div>

                            <h5 style="color:#17A2B8" class="my-4">
                                Mise en oeuvre
                            </h5>
                            <div>
                                <b-card bg-variant="default">
                                    <b-card-text>
                                        <div>
                                            <span class="bold"
                                                >Qui est responsable :</span
                                            >
                                            <u
                                                v-for="item in action.responsables"
                                                :key="item.id"
                                            >
                                                <li class="inline-block mx-1">
                                                    {{ item.name }},
                                                </li>
                                            </u>
                                        </div>

                                        <div>
                                            <span class="bold"
                                                >Qui réalise :</span
                                            >
                                            <u
                                                v-for="item in action.realisators"
                                                :key="item.id"
                                            >
                                                <li class="inline-block mx-1">
                                                    {{ item.name }},
                                                </li>
                                            </u>
                                        </div>
                                    </b-card-text>
                                </b-card>
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
import ActionCalendar from "../components/ActionCalendar";
import ActionTable from "../components/ActionTable";
export default {
 components: {
    ActionCalendar,
    ActionTable
  },
    mounted() {
        this.$store.commit("SHOW_ACTION", this.$route.params.id);
    },
    computed: {
        action() {
            return this.$store.state.action.action;
        },
        action_status() {
            return this.$store.state.action.get_action;
        }
    },
    data: function() {
        return {};
    }
};
</script>

<style></style>
