<template>
    <div>
        <h4
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
        </h4>
        <p style="transition:0.5s" v-if="dropdown">{{ text }}</p>
    </div>
</template>

<script>
export default {
    name:"DropDown",
    props:["color", "text", "title"],
    data: function() {
        return {
            dropdown: false
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
