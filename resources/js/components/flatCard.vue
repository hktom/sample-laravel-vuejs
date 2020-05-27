<template>
    <div class="my-3">
        <div v-if="action != null">
            <h3 class="my-1 mb-3 action-title" :style="'background-color:' + color">
                <img :src="'/img/icon/'+icon+'.png'" style="width:20px" class="bottom"/>
                {{ title }}
            </h3>

            <div>
                <Structure view="2" :collection="action" />
                <span v-if="organisations.length > 0"
                    >(<Structure view="3" :collection="action" />)</span
                >
            </div>
        </div>

        <div v-else>
            <h3 class="my-2 mb-3 action-title" :style="'background-color:' + color">
                <!-- <font-awesome-icon :icon="icon" /> -->
                <img :src="'/img/icon/'+icon+'.png'" style="width:20px" class="bottom"/>
                {{ title }}
            </h3>
            <p v-html="text" class="paragraph"></p>
        </div>
    </div>
</template>

<script>
import Structure from "./Structure";
export default {
    components: {
        Structure
    },
    name: "flatCard",
    props: ["icon", "color", "action", "text", "title"],
    data: function() {
        return {
            users: [],
            organisations: []
        };
    },

    mounted() {
        if (this.action != null) {
            this.fill();
        }
    },

    methods: {
        fill() {
            this.action.map(item => {
                if (item.is_a_person) {
                    this.users.push(item);
                } else {
                    this.organisations.push(item);
                }
            });
        }
    }
};
</script>

<style>
.paragraph * {
    text-align: left !important;
}
</style>
