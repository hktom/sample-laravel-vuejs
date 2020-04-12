<template>

<div>
      <Baniere baniere="bg-image.jpg"/>

<div class="w80 mauto my-5">
    <b-row>
        <b-col cols="8">
            <h2 style="font-weight: normal"> {{action.name}} </h2>
            <div>
                <h4 style="font-weight: normal;color:#17A2B8">Description</h4>
                <div v-html="action.description"></div>
            </div>
        </b-col>

        <b-col cols="4">
            <div></div>
        </b-col>

    </b-row>
</div>

</div>

</template>

<script>
export default {
mounted(){
    this.$store.commit("SHOW_ACTION", this.$route.params.id);
},
computed: {
    action() {
      console.log(this.$store.state.action.action);
      return this.$store.state.action.action;
    },
  },
data: function(){
    return {

    }
}


}
</script>

<style>

</style>
