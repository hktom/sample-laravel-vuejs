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

        <h5
            :style="'background-color:' + action.project.color"
            class="mt-4 action-title"
        >
            <font-awesome-icon icon="retweet" />
            Mise en oeuvre
        </h5>
        <div>
            <b-card bg-variant="default">
                <b-card-text>
                    <span class="bold">Qui est responsable :</span>
                    <div>
                        <span
                            v-for="author in action.responsables"
                            :key="author.id + '_'"
                        >
                            <span v-if="!author.is_a_person">
                                {{ author.name }} /
                            </span>
                        </span>

                        (
                        <span
                            v-for="(author, count) in action.responsables"
                            :key="author.id"
                        >
                            <span v-if="author.is_a_person">
                                {{ author.name }}
                                <span
                                    v-if="
                                        count + 1 < action.responsables.length
                                    "
                                    >,</span
                                >
                            </span>
                        </span>
                        )
                    </div>

                    <div>
                        <span class="bold">Qui réalise :</span>
                        <div>
                            <div>
                                <span
                                    v-for="author in action.realisators"
                                    :key="author.id + '_'"
                                >
                                    <span v-if="!author.is_a_person">
                                        {{ author.name }} /
                                    </span>
                                </span>

                                (
                                <span
                                    v-for="(author,
                                    count) in action.realisators"
                                    :key="author.id"
                                >
                                    <span v-if="author.is_a_person">
                                        {{ author.name }}
                                        <span
                                            v-if="
                                                count + 1 <
                                                    action.realisators.length
                                            "
                                            >,</span
                                        >
                                    </span>
                                </span>
                                )
                            </div>
                        </div>
                    </div>
                </b-card-text>
            </b-card>
        </div>
    </div>
</template>

<script>
import miniCard from "./miniCard";
export default {
    name: "actionRightSide",
    props: ["action"],
    components: {
        miniCard
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
