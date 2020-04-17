<template>
    <div>
        <SpinnerGrow v-if="project_status == false" />

        <div v-else>
            <HeaderPage />
            <div>
                <Baniere
                    :baniere="'/uploads/' + project.image"
                    :btnbackProject="true"
                />

                <div class="w75 mauto my-5">
                    <b-row>
                        <b-col lg="8" md="12">
                            <!-- <actionLeftSide :action="action"/> -->
                            <h3
                                :style="'color:' + project.color"
                                class="uppercase bold"
                            >
                                <img
                                    :src="'/uploads/' + project.icon"
                                    class="x10"
                                />
                                {{ project.ca_principal }}
                            </h3>

                            <h3 class="uppercase bold">
                                {{ project.name }}
                            </h3>

                            <div v-if="project.introduction != null">

                                <h4 class="bold uppercase mt-4">Introduction</h4>

                                <div>
                                    <div v-html="project.introduction"></div>
                                </div>

                            </div>

                            <div v-if="project.context != null">
                                <h4 class="bold uppercase">Contexte</h4>

                                <div v-if="readmore">
                                   <div v-html="project.context.slice(0, 1500)"></div>
                                   <span
                                   @click="_readmore"
                                   class="italic cursor-pointer">[continuer la lecture...]</span>
                                </div>

                                <div v-else>
                                    <div v-html="project.context"></div>
                                </div>

                            </div>

                            <h4 class="bold my-4">
                                Ce que prévoit le Plan Biodiversité 2020-2023
                            </h4>

                            <div v-if="project.to_know != null">

                                <DropDown
                                :color="project.color"
                                title="Pour CONNAÎTRE la biodiversité et son
                                    évolution"
                                :text="project.to_know"
                                />

                            </div>

                            <div v-if="project.to_enrich != null">

                                <DropDown
                                :color="project.color"
                                title="Pour ENRICHIR la biodiversité et garantir
                                    les services écosystémiques"
                                :text="project.to_enrich"
                                />

                            </div>

                            <div v-if="project.to_value != null">

                                <DropDown
                                :color="project.color"
                                title="Pour VALORISER la biodiversité et partager ses bienfaits auprès de la population"
                                :text="project.to_value"
                                />

                            </div>
<!--
                            <projectTable
                            :fields="project.news"
                            :actions="project.purchases"
                            :color="project.color" /> -->

                            <DropDownCard
                            :articles="project.news"
                            :color="project.color"
                            title="Les actions du CA4 en un coup d’œil"
                            iconColor="eye"
                            subtitle="Les actions sur fond coloré sont prioritaires."
                            cardTitle="nouveautés"
                            route="showAction"
                            />

                            <DropDownCard
                            :articles="project.purchases"
                            :color="project.color"
                            cardTitle="Poursuivre & renforcer les actions existantes"
                            route="showAction"
                            />


                        </b-col>

                        <b-col lg="4" md="12">
                            <!-- <actionRighSide :action="action"/> -->
                            <div>
                                <img
                                    :src="'/uploads/' + project.image"
                                    class="w100 y15 cover"
                                />
                            </div>

                            <div>
                                <h5
                                    class="mt-4 action-title block"
                                    :style="'background-color:' + project.color"
                                >
                                    <!-- <font-awesome-icon icon="user" /> -->
                                    Vision
                                </h5>
                                <b-card>
                                    <b-card-text>
                                        {{ project.vision }}
                                    </b-card-text>
                                </b-card>
                            </div>

                            <div class="mt-4">
                                <h5
                                    class="mt-4 action-title block"
                                    :style="'background-color:' + project.color"
                                >
                                    <font-awesome-icon icon="user" />
                                    Contributeurs
                                </h5>

                                <b-card>
                                    <b-card-text>
                                        <span
                                            v-for="(item,
                                            count) in project.actors"
                                            :key="item.id"
                                        >
                                            {{ item.name }}
                                            <span
                                                v-if="
                                                    count + 1 <
                                                        project.actors.length
                                                "
                                                >,</span
                                            >
                                        </span>
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
import projectTable from '../../components/projectTable'
import DropDown from '../../components/DropDown'
import DropDownCard from '../../components/DropDownCard'
export default {
    components: {
        projectTable,
        DropDown,
        DropDownCard,
    },
    mounted() {
        this.$store.commit("SHOW_PROJECT", this.$route.params.id);
    },
    computed: {
        project() {
            return this.$store.state.project.project[0];
        },
        project_status() {
            return this.$store.state.project.get_project;
        }
    },
    data: function() {
        return {
            readmore:true,
        };
    },

    methods:{
        _readmore(){
            return this.readmore=!this.readmore;
        },
    }
};
</script>

<style></style>
