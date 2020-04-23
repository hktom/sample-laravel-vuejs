<template>
    <div class="my-3">
        <div v-if="action != null">
            <h5 class="my-1 action-title" :style="'background-color:' + color">
                <font-awesome-icon :icon="icon" />
                {{ title }}
            </h5>

          <div>

                <span v-for="author in action" :key="author.id+'_'">
                  <span v-if="author.is_a_person"> {{author.name}}/</span>
                </span>

                 <span v-if="action.length>0">
                      (<span v-for="(author, count) in action" :key="author.id">
                    <span v-if="!author.is_a_person">{{author.name}}<span v-if="count+1 < action.length">,</span></span></span>)
                 </span>

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
export default {
    name: "flatCard",
    props: ["icon", "color", "action", "text", "title"]
};
</script>

<style>
#paragraph *{
    text-align: justify !important;
}
</style>

