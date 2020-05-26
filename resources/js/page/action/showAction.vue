<template>
    <div>
        <vue-headful
            :title="action.name+' | PLAN BIODIVERSITÉ 2020-2023 DE LA STRATÉGIE BIODIVERSITÉ GENÈVE 2030'"
            description="La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique."
        />

        <SpinnerGrow v-if="action_status == false" />

        <div v-else>
            <HeaderPage />
            <div>
                <Baniere
                btnbackText="Revenir aux actions"
                :baniere="'/uploads/'+action.project.image"
                :btnback="true" />

                <div class="w80 px-3 mauto my-5 vls-w75 ms-w100 ss-w100">
                    <b-row>
                        <b-col lg="8" md="12">
                            <actionLeftSide :action="action"/>
                        </b-col>

                        <b-col lg="4" md="12">
                            <actionRighSide :action="action"/>
                        </b-col>
                    </b-row>
                </div>
            </div>
            <FooterPage />
        </div>
    </div>
</template>

<script>
import actionLeftSide from "../../components/actionLeftSide";
import actionRighSide from "../../components/actionRightSide";
import DropDownCard from '../../components/DropDownCard'
export default {
 components: {
    actionLeftSide,
    actionRighSide,
     DropDownCard
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

<style>
</style>
