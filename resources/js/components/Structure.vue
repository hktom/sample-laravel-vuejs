<template>
    <span v-if="view == 1" class="structure">
        <span v-for="(item, count) in users" :key="item.id"
            >{{ item.name.trim()
            }}{{ count + 1 < users.length ? "," : "" }}</span
        >
    </span>

    <span v-else-if="view == 2" class="structure">
        <span v-for="(item, count) in users" :key="item.id"
            >{{ item.name.trim()
            }}{{ count + 1 < users.length ? "/" : "" }}</span
        >
    </span>

    <span v-else-if="view == 3" class="structure">
        <span v-for="(item, count) in organisations" :key="item.id"
            >{{ _sigle(item)
            }}{{ count + 1 < organisations.length ? "," : "" }}</span
        >
    </span>

    <span v-else class="structure">
        <span v-for="(item, count) in organisations" :key="item.id"
            >{{ _sigle(item)
            }}{{ count + 1 < organisations.length ? "/" : "" }}</span
        >
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
        _sigle(item) {
            // if (item.sigle != "" || item.sigle.length <= 0) {
            //     return (
            //         <div class="tooltip">
            //            {{ item.sigle }}}
            //             <span class="tooltiptext">{{item.name}}</span>
            //         </div>
            //     );
            // } else {
            //     return item.name;
            // }

            return item.sigle!=''||item.length<=1?item.sigle:item.name;
        },

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
.structure * {
    /* white-space: nowrap; */
}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
