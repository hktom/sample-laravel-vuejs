<template>

<div>
      <Baniere baniere="bg-image.jpg" :btnback="true"/>

<div class="w75 mauto my-5">
    <b-row>
        <b-col cols="8">
            <h2 class="lighter"> {{action.name}} </h2>

            <h5 style="color:#17A2B8" class="my-4">Description</h5>
            <div v-html="action.description"></div>
            <h5 style="color:#17A2B8" class="my-4">Indicateur</h5>
            <p>{{action.indicator}}</p>

        </b-col>

        <b-col cols="4">
            <div>
                <img :src="'uploads/'+action.image" class="w100 cover"/>
            </div>

            <h5 style="color:#17A2B8" class="my-4">Organisation de l'action</h5>

            <div>
                <b-card bg-variant="default">
                    <b-card-text>
                        <div><span class="bold">Elaborée par:</span>
                        <u v-for="item in action.authors" :key="item.id">
                            <li class="inline-block mx-1">{{item.name}},</li>
                        </u>
                        </div>

                        <div><span class="bold">En collaboration avec:</span>
                        <u v-for="item in action.collaborators" :key="item.id">
                            <li class="inline-block mx-1">{{item.name}},</li>
                        </u>
                        </div>

                    </b-card-text>
                </b-card>
            </div>

            <h5 style="color:#17A2B8" class="my-4">Caracteristiques de l'action</h5>

            <div>
                <b-card bg-variant="default">
                    <b-card-text>
                        <ul class="list-none list-inside">
                            <li class="bold">Type d'action
                                <ul v-for="item in action.types" :key="item.id" class="list-none list-inside">
                                    <li class="lighter">{{item.name}}</li>
                                </ul>
                            </li>

                            <li class="bold">Status
                                <ul v-for="item in action.states" :key="item.id" class="list-none list-inside">
                                    <li class="lighter">{{item.name}}</li>
                                </ul>
                            </li>

                            <li class="bold">Echelle
                                <ul v-for="item in action.echelles" :key="item.id" class="list-none list-inside">
                                    <li class="lighter">{{item.name}}</li>
                                </ul>
                            </li>



                        </ul>
                    </b-card-text>
                </b-card>
            </div>


            <h5 style="color:#17A2B8" class="my-4">Mise en oeuvre</h5>
            <div>
                <b-card bg-variant="default">
                    <b-card-text>
                        <div><span class="bold">Qui est responsable :</span>
                        <u v-for="item in action.responsables" :key="item.id">
                            <li class="inline-block mx-1">{{item.name}},</li>
                        </u>
                        </div>

                        <div><span class="bold">Qui réalise :</span>
                        <u v-for="item in action.realisators" :key="item.id">
                            <li class="inline-block mx-1">{{item.name}},</li>
                        </u>
                        </div>
                    </b-card-text>
                </b-card>
            </div>

        </b-col>

    </b-row>
</div>

</div>

</template>

<script>
export default {
  mounted() {
    this.$store.commit("SHOW_ACTION", this.$route.params.id);
  },
  computed: {
    action() {
      console.log(this.$store.state.action.action);
      return this.$store.state.action.action;
    },
  },
  data: function() {
    return {};
  },
};
</script>

<style>
</style>
