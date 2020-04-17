<template>
    <div>
        <div v-if="title != null">
            <h4 class="mt-4">
                <span :style="'color:' + color" v-if="iconColor != null">
                    <font-awesome-icon :icon="iconColor" />
                </span>

                <span :style="'color:black'" v-if="icon != null">
                    <font-awesome-icon :icon="iconColor" />
                </span>
                {{ title }}
            </h4>

            <h6 v-if="subtitle != null">{{ subtitle }}</h6>
        </div>

        <b-row>
            <b-col lg="12">
                <h5
                    @click="toggleFields"
                    class="my-4 action-title cursor-pointer"
                    :style="'background-color:' + color"
                >
                    {{ cardTitle }}

                    <font-awesome-icon
                        v-if="!fieldShow"
                        icon="sort-down"
                        size="lg"
                        class="mb-1"
                    />

                    <font-awesome-icon
                        v-else
                        icon="sort-up"
                        size="lg"
                        class=""
                    />
                </h5>

                <div
                    v-if="fieldShow"
                    v-for="item in articles"
                    :key="item.id"
                    class="table cursor-pointer"
                    @click="goTo(item.slug, route)"
                >
                    <p v-if="route == 'project'" class="table-row">
                        {{ item.id }} {{ item.label }}
                    </p>

                    <p v-else class="table-row">
                        {{ item.code }} {{ item.label }}
                    </p>
                </div>
            </b-col>
        </b-row>
    </div>
</template>

<script>
export default {
    name: "DropDownCard",
    props: [
        "color",
        "articles",
        "title",
        "icon",
        "iconColor",
        "subtitle",
        "cardTitle",
        "slug",
        "route"
    ],
    data() {
        return {
            fieldShow: false
        };
    },
    methods: {
        toggleFields() {
            return (this.fieldShow = !this.fieldShow);
        },

        goTo(articleId, route) {
            this.$router.push({
                name: route,
                params: { id: articleId }
            });

            if (this.route == "showAction")
                this.$store.commit("SHOW_ACTION", this.$route.params.id);
        }
    }
};

// <DropDownCard
// :articles="project.news"
// :color="project.color"
// title="Les actions du CA4 en un coup d’œil"
// icon="eye"
// iconColor="eye"
// subtitle="Les actions sur fond coloré sont prioritaires."
// cardTitle="nouveautés"
// slug=""
// route="showAction"
// />
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
