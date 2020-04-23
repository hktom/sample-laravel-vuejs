<template>
    <div>
        <HeaderPage />

        <div class="pb10">
            <Baniere
                baniere="/img/bg-image.jpg"
                description="<strong>La biodiversité</strong> c’est notre assurance vie </br> face aux changements climatiques et une priorité pour réussir la<strong> transition écologique.</strong>"
            />

            <FooterPage />
        </div>
    </div>
</template>

<script>
import filterAction from "../components/FilterAction";
import menuIndicator from "../components/menuIndicator";
export default {
    components: {
        filterAction,
        menuIndicator
    },

    mounted() {},

    data() {
        return {};
    },

    computed: {
        action_status() {
            return this.$store.state.action.status;
        },

        actions() {
            return this.$store.state.action.item;
        },

        pages() {
            return this.$store.state.action.actions;
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
