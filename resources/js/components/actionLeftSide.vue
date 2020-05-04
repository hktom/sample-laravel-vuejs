<template>
    <div>
        <div class="d-flex flex-row bd-highlight align-items-top">
            <div class="pr-2" style="width:150px">
                <img
                    :src="'/img/' + action.project.id + '.png'"
                    class="w100 cover"
                />
            </div>

            <div>
                <h1 class="bold fs1-4" :style="'color:' + action.project.color">
                    ACTION {{ action.code }}
                </h1>

                <h1 class="bold fs1-4">
                    {{ action.name }}
                </h1>
                <p class="fs0-9">{{ action.orientation }}</p>
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

        <h3
            class="my-4 action-title"
            :style="'background-color:' + action.project.color"
        >
            <!-- <font-awesome-icon icon="calendar-alt" /> -->
            <img src="/img/icon/calendar-alt.png" style="width:20px" class="bottom"/>
            Calendrier Prévu
        </h3>

        <ActionCalendar
            :items="action.calendars"
            :color="action.project.color"
        />

        <DropDownCard
            :articles="action.projects"
            :color="action.project.color"
            icon="pointer"
            cardTitle="Champs d'application liés"
            route="showProject"
        />

        <DropDownCard
            :articles="action.actions_link"
            :color="action.project.color"
            icon="refresh-alt"
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
