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

                            <h3 class="bold mb-4">
                                Ce que prévoit le Plan Biodiversité 2020-2023
                            </h3>

                            <div v-if="project.to_know != null">
                                <h4
                                    @click="_dropdown_one"
                                    class="bold action-title cursor-pointer"
                                    :style="'background-color:' + project.color"
                                >
                                    Pour CONNAÎTRE la biodiversité et son
                                    évolution
                                </h4>
                                <div style="transition:0.5s" v-if="dropdown_one" v-html="project.to_know"></div>
                            </div>

                            <div v-if="project.to_enrich != null">
                                <h4
                                    @click="_dropdown_two"
                                    class="bold uppercase action-title cursor-pointer"
                                    :style="'background-color:' + project.color"
                                >
                                    Pour ENRICHIR la biodiversité et garantir
                                    les services écosystémiques
                                </h4>
                                <div style="transition:0.2s" v-if="dropdown_two" v-html="project.to_enrich"></div>
                            </div>

                            <div v-if="project.to_value != null">
                                <h4
                                    @click="_dropdown_three"
                                    class="bold uppercase action-title cursor-pointer"
                                    :style="'background-color:' + project.color"
                                >
                                    Pour VALORISER la biodiversité et partager
                                    ses bienfaits auprès de la population
                                </h4>
                                <div style="transition:0.2s" v-if="dropdown_three" v-html="project.to_value"></div>
                            </div>

                            <projectTable
                            :fields="project.news"
                            :actions="project.purchases"
                            :color="project.color" />
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
export default {
    components: {
        projectTable,
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
            dropdown_one:false,
            dropdown_two:false,
            dropdown_three:false,
            readmore:true,
        };
    },

    methods:{
        _readmore(){
            return this.readmore=!this.readmore;
        },
        _dropdown_one(){
            return this.dropdown_one=!this.dropdown_one;
        },

        _dropdown_two(){
            return this.dropdown_two=!this.dropdown_two;
        },

        _dropdown_three(){
            return this.dropdown_three=!this.dropdown_three;
        },

    }
};
</script>

<style></style>
