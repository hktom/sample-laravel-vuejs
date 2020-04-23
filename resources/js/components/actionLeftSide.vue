<template>
    <div>
        <div class="d-flex flex-row bd-highlight align-items-top">
            <div class="x8 pr-2">
                <img
                    :src="'/img/' + action.project.id + '.png'"
                    class="w100 cover"
                />
            </div>

            <div>
                <h3 class="bold" :style="'color:' + action.project.color">
                    ACTION {{ action.code }}
                </h3>

                <h4 class="bold">
                    {{ action.name }}
                </h4>
                <h6>{{ action.orientation }}</h6>
            </div>
        </div>

        <flatCard
            :action="action.authors"
            :color="action.project.color"
            icon="user"
            title="Elaborée par"
        />

        <flatCard
            :action="action.collaborators"
            icon="user-plus"
            title="en collaboration avec"
            :color="action.project.color"
        />

        <flatCard
            :text="action.description"
            icon="plug"
            title="Description"
            :color="action.project.color"
        />

        <flatCard
            :text="action.indicator"
            icon="tachometer-alt"
            title="Indicateur"
            :color="action.project.color"
        />

        <h5
            class="my-4 action-title"
            :style="'background-color:' + action.project.color"
        >
            <font-awesome-icon icon="calendar-alt" />
            Calendrier Prévu
        </h5>

        <ActionCalendar
            :items="action.calendars"
            :color="action.project.color"
        />

        <DropDownCard
            :articles="action.projects"
            :color="action.project.color"
            icon="palette"
            cardTitle="Champs d'application liés"
            route="showProject"
        />

        <DropDownCard
            :articles="action.actions_link"
            :color="action.project.color"
            icon="compact-disc"
            cardTitle="Actions liée"
            route="showAction"
        />
    </div>
</template>

<script>
import flatCard from "./flatCard";
import ActionCalendar from "./ActionCalendar";
import DropDownCard from "./DropDownCard";
export default {
    name: "actionLeftSide",
    props: ["action"],
    components: {
        ActionCalendar,
        flatCard,
        DropDownCard
    }
};
</script>

<style>
.action-title {
    display: inline-block;
    padding: 4px 40px;
    color: black;
    text-transform: uppercase;
    font-size: 14px;
}
</style>
