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
            title="Statut"
            :color="action.project.color"
        />

        <miniCard
            :action="action.echelles"
            icon="chair"
            title="Échelle"
            :color="action.project.color"
        />

        <miniCard
            :doubleCard=true
            :action="action.responsables"
            :actiontwo="action.realisators"
            icon="refresh"
            title="Mise en oeuvre"
            subone="Qui est responsable :"
            subtwo="Qui réalise :"
            :color="action.project.color"
        />

        <div class="p-4" v-if="action.files.length > 0">

            <div v-for="file in action.files" :key="file.id">
                <a :href="'/uploads/'+file.location" class="fs1 black">
                <span :class="file.type=='pdf'?'text-danger fs2':'text-primary fs2'">
                <font-awesome-icon
                :icon="file.type=='pdf'?'file-pdf':'file-word'" /> </span>
                {{ file.name }}
                </a>
            </div>

        </div>

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

</style>
