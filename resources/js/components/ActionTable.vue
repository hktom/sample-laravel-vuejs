<template>
    <div>
        <b-row>
            <b-col lg="12">
                <h5
                @click="toggleFields"
                class="my-4 action-title cursor-pointer"
                :style="'background-color:' + color">
                    <font-awesome-icon icon="palette" />
                    Champs d'application liés
                </h5>
                <div
                    v-if="fieldShow"
                    v-for="item in fields"
                    :key="item.id + '_project'"
                    class="table cursor-pointer"
                    @click="goToProject(item.id)"
                >
                    <p class="table-row">{{ item.id }} {{ item.name }}</p>
                </div>
            </b-col>

            <b-col lg="12">
                <h5
                @click="toggleAction"
                :style="'background-color:' + color"
                class="my-4 action-title cursor-pointer">
                <font-awesome-icon icon="compact-disc" />
                Actions liée</h5>
                <div
                    v-if="actionShow"
                    v-for="item in actions"
                    :key="item.id + '_action'"
                    class="table cursor-pointer"
                    @click="goToAction(item.id)"
                >
                    <p class="table-row">{{ item.code }} {{ item.label }}</p>
                </div>
            </b-col>
        </b-row>
    </div>
</template>

<script>
export default {
    name: "actionTable",
    props: ["fields", "actions", "color"],
        data(){

    return {
        fieldShow:false,
        actionShow:false,
    };

        },
    methods: {

        toggleFields(){

            return this.fieldShow=!this.fieldShow;
        },

        toggleAction(){
            return this.actionShow=!this.actionShow;
        },

        goToProject(articleId) {
            // return this.$router.push({
            //     path: `/project/${articleId}`,
            // });
            this.$router.push({
                name: "shwoProject",
                params: { id: articleId }
            });
        },

        goToAction(articleId) {
            this.$router.push({
                name: "showAction",
                params: { id: articleId }
            });
            this.$store.commit("SHOW_ACTION", this.$route.params.id);
        }
    }
};
</script>

<style>
.table {
    text-align: left;
    padding-left: 2px !important;
    padding-right: 2px !important;
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: 0.5s;
    /* border:0.5px solid #E9EBEC; */
    /* border-bottom-width: 0px; */
}

.table:hover {
    transform: scale(1.05);
}

.table h6 {
    background-color: #17a2b8;
    color: white;
    padding: 4px 0px 4px 0px;
    text-align: center;
}

.table-row {
    padding: 5px 15px 5px 15px;
    /* border-bottom: 2px solid #E9EBEC; */
}
</style>
