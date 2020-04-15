<template>
    <div>
        <h5
            class="mt-4 action-title block"
            :style="'background-color:' + color"
        >
            <font-awesome-icon :icon="icon" />
            {{ title }}
        </h5>
        <b-card bg-variant="default">
            <b-card-text>
                <div>
                    <u v-for="(item, count) in action" :key="item.id">
                        <li class="inline-block mx-1">{{ item.name }}
                            <span v-if="count+1 < action.length">,</span>
                        </li>
                    </u>
                </div>
            </b-card-text>
        </b-card>
    </div>
</template>

<script>
export default {
    name: "miniCard",
    props: ["icon", "title", "action", "color"]
};
</script>
