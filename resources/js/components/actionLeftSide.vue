<template>
    <div>
        <h3 class="bold" :style="'color:' + action.project.color">
            ACTION {{ action.code }}
        </h3>

        <h4 class="bold">
            {{ action.name }}
        </h4>
        <h6> {{action.orientation}} </h6>

        <flatCard
        :action="action.authors"
        :color="action.project.color"
        icon="user"
        title="Elaborée par"/>

        <flatCard
        :action="action.collaborators"
        icon="user-plus"
        title="en collaboration avec"
        :color="action.project.color" />

        <h5
            class="my-4 action-title"
            :style="'background-color:' + action.project.color"
        >
            <font-awesome-icon icon="plug" />
            Description
        </h5>

        <div v-html="action.description"></div>

        <h5
            class="my-4 action-title"
            :style="'background-color:' + action.project.color"
        >
            <font-awesome-icon icon="tachometer-alt" />
            Indicateur
        </h5>

        <p>{{ action.indicator }}</p>

        <h5 class="my-4 action-title"
        :style="'background-color:' + action.project.color">
            <font-awesome-icon icon="calendar-alt" />
            Calendrier Prévu
        </h5>

        <ActionCalendar :items="action.calendars" :color="action.project.color"/>
        <ActionTable
            class="my-4"
            :fields="action.projects"
            :actions="action.actions_link"
            :color="action.project.color"
        />
    </div>
</template>

<script>
import flatCard from "./flatCard";
import ActionCalendar from "./ActionCalendar";
import ActionTable from "./ActionTable";
export default {
    name:"actionLeftSide",
    props:["action"],
    components:{
        ActionCalendar,
        ActionTable,
        flatCard
    },

};
</script>

<style>
.action-title{
    display: inline-block;
    padding: 4px 40px;
    color: black;
    text-transform: uppercase;
    font-size: 14px;
}

</style>
