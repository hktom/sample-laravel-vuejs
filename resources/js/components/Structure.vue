<template>
    <span v-if="view == 1" class="structure">
        <span v-for="(item, count) in users" :key="item.id"
            >{{item.name.trim()}}{{ count+1 < users.length?',':''}}</span>
    </span>

    <span v-else-if="view == 2" class="structure">
        <span v-for="(item, count) in users" :key="item.id"
            >{{item.name.trim()}}{{ count+1 < users.length?'/':''}}</span>
    </span>

    <span v-else-if="view == 3" class="structure">
        <span v-for="(item, count) in organisations" :key="item.id"
            >{{item.name.trim()}}{{ count+1 < organisations.length?',': ''}}</span>
    </span>

    <span v-else class="structure">
        <span v-for="(item, count) in organisations" :key="item.id"
            >{{item.name.trim()}}{{ count+1 < organisations.length?'/':''}}</span>
    </span>
</template>

<script>
export default {
    name: "Structure",
    props: ["view", "collection"],
    data: function() {
        return {
            users: [],
            organisations: []
        };
    },
    computed: {},

    methods: {
        fill() {
            this.collection.map(item => {
                if (item.is_a_person) {
                    this.users.push(item);
                } else {
                    this.organisations.push(item);
                }
            });
        }
    },
    mounted() {
        this.fill();
    }
};
</script>

<style>
.structure *{
    white-space: nowrap;
}
</style>
