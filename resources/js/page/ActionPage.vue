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
import actionLeftSide from "../components/actionLeftSide";
import actionRighSide from "../components/actionRightSide";
export default {
 components: {
    actionLeftSide,
    actionRighSide
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
