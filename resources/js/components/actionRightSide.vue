<template>
    <div>
        <!-- <div>
            <img :src="'/uploads/' + action.project.icon" class="w100 cover" />
        </div> -->

        <miniCard
            :action="action.types"
            icon="cogs"
            title="type d'action"
            :color="action.project.color"
        />

        <miniCard
            :action="action.states"
            icon="chart-line"
            title="Status"
            :color="action.project.color"
        />

        <miniCard
            :action="action.echelles"
            icon="dolly-flatbed"
            title="Echelle"
            :color="action.project.color"
        />

        <miniCard
            :doubleCard=true
            :action="action.responsables"
            :actiontwo="action.realisators"
            icon="retweet"
            title="Mise en oeuvre"
            subone="Qui est responsable :"
            subtwo="Qui réalise :"
            :color="action.project.color"
        />

    </div>
</template>

<script>
import miniCard from "./miniCard";
import Structure from "./Structure";
export default {
    name: "actionRightSide",
    props: ["action"],
    components: {
        miniCard,
        Structure
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
