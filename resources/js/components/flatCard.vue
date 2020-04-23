<template>
    <div class="my-3">
        <div v-if="action != null">
            <h5 class="my-1 action-title" :style="'background-color:' + color">
                <font-awesome-icon :icon="icon" />
                {{ title }}
            </h5>

            <div>
                <Structure view="2" :collection="action" />
                <span v-if="organisations.length > 0"
                    >(<Structure view="3" :collection="action" />)</span
                >
            </div>
        </div>

        <div v-else>
            <h5 class="my-2 action-title" :style="'background-color:' + color">
                <font-awesome-icon :icon="icon" />
                {{ title }}
            </h5>
            <p v-html="text" id="paragraph"></p>
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
#paragraph * {
    text-align: justify !important;
}
</style>
