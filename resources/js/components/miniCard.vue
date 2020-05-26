<template>
    <div>
        <!-- if double card equal false -->
        <div v-if="!doubleCard">
            <h3
                class="mt-4 mb-0 py-1 action-title block"
                :style="'background-color:' + color"
            >
                <!-- <font-awesome-icon :icon="icon" /> -->
                <img :src="'/img/icon/'+icon+'.png'" style="width:20px" class="bottom"/>
                {{ title }}
            </h3>
            <b-card bg-variant="default" class="py-0 my-0">
                <b-card-text>
                    <div>
                        <ul v-for="(item, count) in action" :key="item.id" class="list-none">
                            <li style="text-decoration:none;line-height:0.8rem">
                                {{ item.name.trim()
                                }}<span v-if="count + 1 < action.length"
                                    >,</span
                                >
                            </li>
                        </ul>
                    </div>
                </b-card-text>
            </b-card>
        </div>

        <!-- if double card equal true-->
        <div v-else>
            <h3
                class="mt-4 mb-0 py-1 action-title block"
                :style="'background-color:' + color"
            >
                <!-- <font-awesome-icon :icon="icon" /> -->
                <img :src="'/img/icon/'+icon+'.png'" style="width:20px" class="bottom"/>
                {{ title }}
            </h3>
            <b-card bg-variant="default" class="py-0 my-0">
                <b-card-text>
                    <!-- subtitle one -->
                    <div>
                    <h6>{{ subone }}</h6>
                    <Structure view="3" :collection="action"/>
                    <span v-if="action_users.length > 0">(<Structure view="1" :collection="action"/>)</span>
                    </div>
                    <!-- subtitle one -->

                    <!-- subtitle two -->
                    <div>
                    <h6>{{ subtwo }}</h6>
                    <Structure view="3" :collection="actiontwo"/>
                    <span v-if="action_two_users.length > 0">(<Structure view="1" :collection="action"/>)</span>
                    </div>
                    <!-- subtitle two -->


                </b-card-text>
            </b-card>
        </div>
        <!-- if double card equal true-->
    </div>
</template>

<script>
import Structure from "./Structure";
export default {
    name: "miniCard",
    props: [
        "icon",
        "title",
        "action",
        "actiontwo",
        "color",
        "doubleCard",
        "subone",
        "subtwo"
    ],
    components: {
        Structure
    },
    data: function() {
        return {
            action_users: [],
            action_organisation: [],
            action_two_users: [],
            action_two_organisation: []
        };
    },
    methods: {
        actionfill() {
            this.action.map((item) => {
                if(item.is_a_person) {
                    this.action_users.push(item);
                } else {
                    this.action_organisation.push(item);
                }
            });
        },

        actionTwofill() {
            this.actiontwo.map((item) => {
                if (item.is_a_person) {
                    this.action_two_users.push(item);
                } else {
                    this.action_two_organisation.push(item);
                }
            });
        }
    },
    mounted() {
        if (this.doubleCard) {
            this.actionfill();
            this.actionTwofill();
        }
    }
};
</script>
