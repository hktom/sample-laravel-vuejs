<template>
    <div>
        <h3
            @click="_dropdown"
            class="bold action-title cursor-pointer"
            :style="'background-color:' + color"
        >
            {{ title }}

            <font-awesome-icon
                v-if="!dropdown"
                icon="chevron-down"
                size="lg"
                class=""
            />

            <font-awesome-icon v-else icon="chevron-up" size="lg" class="" />
        </h3>
        <p style="transition:0.5s" v-if="dropdown" v-html="text" id="paragraph"></p>
    </div>
</template>

<script>
export default {
    name:"DropDown",
    props:["color", "text", "title"],
    data: function() {
        return {
            dropdown: true
        };
    },

    methods: {
        _dropdown() {
            return (this.dropdown = !this.dropdown);
        }
    }
};
</script>

<style>
</style>
