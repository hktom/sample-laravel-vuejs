<template>
    <div>
        <vue-headful
            :title="project.name+' | PLAN BIODIVERSITÉ 2020-2023 DE LA STRATÉGIE BIODIVERSITÉ GENÈVE 2030'"
            description="La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique."
        />

        <SpinnerGrow v-if="project_status == false" />

        <div v-else>
            <HeaderPage />
            <div>
                <Baniere
                    btnbackText="Revenir aux champs d'applications"
                    :baniere="'/uploads/' + project.image"
                    :btnback="true"
                />

                <div class="w80 px-3 mauto my-5 vls-w75 ms-w100 ss-w100">
                    <b-row>
                        <b-col lg="7" md="12">
                            <div
                                class="d-flex flex-row bd-highlight align-items-top"
                            >
                                <div class="pr-2" style="width:150px">
                                    <img :src="'/img/' + project.id + '.png'"
                                        class="w100 cover"
                                    />
                                </div>

                                <div>
                                    <h1 class="bold fs1-3"
                                    :style="'color:' + project.color"
                                    >
                                        {{ project.ca_principal }}
                                    </h1>

                                    <h1 class="bold fs1-3">
                                        {{ project.name }}
                                    </h1>
                                </div>
                            </div>

                            <div v-if="project.introduction != null">
                                <h2 class="bold uppercase my-4 fs1-2">
                                    Introduction
                                </h2>

                                <div>
                                    <div v-html="project.introduction"></div>
                                </div>
                            </div>

                            <div v-if="project.context != null">
                                <h2 class="bold uppercase my-4 fs1-2">Contexte</h2>

                                <div v-if="readmore">
                                    <div
                                        id="paragraph"
                                        v-html="project.context.slice(0, 1500)"
                                    ></div>
                                    <span
                                        @click="_readmore"
                                        class="italic cursor-pointer"
                                        >[continuer la lecture...]</span
                                    >
                                </div>

                                <div v-else>
                                    <div
                                        v-html="project.context"
                                        id="paragraph"
                                    ></div>
                                </div>
                            </div>

                            <h2 class="bold my-4 uppercase fs1-2">
                                Ce que prévoit le Plan Biodiversité 2020-2023
                            </h2>

                            <div v-if="project.to_know != null" class="my-4">
                                <DropDown
                                    :color="project.color"
                                    title="Pour CONNAÎTRE la biodiversité et son
                                    évolution"
                                    :text="project.to_know"
                                />
                            </div>

                            <div v-if="project.to_enrich != null" class="my-4">
                                <DropDown
                                    :color="project.color"
                                    title="Pour ENRICHIR la biodiversité et garantir
                                    les services écosystémiques"
                                    :text="project.to_enrich"
                                />
                            </div>

                            <div v-if="project.to_value != null" class="my-4">
                                <DropDown
                                    :color="project.color"
                                    title="Pour VALORISER la biodiversité et partager ses bienfaits auprès de la population"
                                    :text="project.to_value"
                                />
                            </div>

                            <DropDownCard
                                v-if="project.news.length >0"
                                :articles="project.news"
                                :color="project.color"
                                :title="'Les actions du '+project.ca_principal+' en un coup d’œil'"
                                iconColor="eye"
                                subtitle="Les actions sur fond coloré sont prioritaires."
                                cardTitle="nouveautés"
                                route="showAction"
                            />

                            <DropDownCard
                                v-if="project.purchases.length >0"
                                :articles="project.purchases"
                                :color="project.color"
                                cardTitle="Poursuivre & renforcer les actions existantes"
                                route="showAction"
                            />
                        </b-col>

                        <b-col lg="5" md="12">
                            <!-- <actionRighSide :action="action"/> -->
                            <div>
                                <img
                                    :src="'/uploads/' + project.image"
                                    class="w100 y15 cover ss-hidden ms-hidden lms-hidden"
                                />
                            </div>

                            <div>
                                <h3
                                    class="mt-4 mb0 action-title block fs1"
                                    :style="'background-color:' + project.color"
                                >
                                    Vision
                                </h3>
                                <b-card>
                                    <b-card-text v-html="project.vision">
                                    </b-card-text>
                                </b-card>
                            </div>

                            <div class="mt-4">
                                <h3
                                    class="mt-4 mb0 action-title block fs1"
                                    :style="'background-color:' + project.color"
                                >
                                    <font-awesome-icon icon="user" />
                                    Contributeurs
                                </h3>

                                <b-card>
                                    <b-card-text>
                                        <Structure
                                            view="3"
                                            :collection="project.actors"
                                        />
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
import projectTable from "../../components/projectTable";
import DropDown from "../../components/DropDown";
import DropDownCard from "../../components/DropDownCard";
import Structure from "../../components/Structure";
import flatCard from "../../components/flatCard";
export default {
    components: {
        projectTable,
        DropDown,
        DropDownCard,
        Structure,
        flatCard
    },
    mounted() {
        this.$store.commit("SHOW_PROJECT", this.$route.params.id);
    },
    computed: {
        project() {
            return this.$store.state.project.project;
        },
        project_status() {
            return this.$store.state.project.get_project;
        }
    },
    data: function() {
        return {
            readmore: true
        };
    },

    methods: {
        _readmore() {
            return (this.readmore = !this.readmore);
        }
    }
};
</script>

<style>
/* #nobreak *{
  white-space: nowrap;
} */
</style>
