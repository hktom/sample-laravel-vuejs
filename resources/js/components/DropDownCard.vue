<template>
    <div>
        <div v-if="title != null">
            <h2 class="mt-4 fs1-2 uppercase">
                <span :style="'color:' + color" v-if="iconColor != null">
                    <font-awesome-icon :icon="iconColor" />
                </span>

                <span :style="'color:black'" v-if="icon != null">
                    <font-awesome-icon :icon="iconColor" />
                </span>
                {{ title }}
            </h2>

            <!-- <h2 v-if="subtitle != null">{{ subtitle }}</h2> -->
        </div>

            <div>
                <h3
                    @click="toggleFields"
                    class="my-4 action-title cursor-pointer"
                    :style="'background-color:' + color"
                >

                    <!-- <font-awesome-icon
                        v-if="icon!=null"
                        :icon="icon"
                        size="lg"
                        class=""
                    /> -->

                    <img :src="'/img/icon/'+icon+'.png'" style="width:20px" class="bottom" v-if="icon!=null"/>

                    {{ cardTitle }}

                    <font-awesome-icon
                        v-if="!fieldShow"
                        icon="chevron-down"
                        size="lg"
                        class=""
                    />

                    <font-awesome-icon
                        v-else
                        icon="chevron-up"
                        size="lg"
                        class=""
                    />
                </h3>

                <div
                    v-if="fieldShow"
                    v-for="item in articles"
                    :key="item.id"
                    class="table cursor-pointer"
                    @click="goTo(item.slug, route)"
                >
                    <p v-if="route == 'showProject'" class="table-row text-left">
                        {{ item.id }} {{ item.name }}
                    </p>

                    <p v-else class="table-row text-left">
                        {{ item.code }} {{ item.label }}
                    </p>
                </div>
            </div>
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
            fieldShow: true
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
    transform: scale(1.01);
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
