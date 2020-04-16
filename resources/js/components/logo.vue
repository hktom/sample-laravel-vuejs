<template>
  <div class="w100">

      <div class="d-flex flex-row bd-highlight align-items-center mb-3">
          <div v-if="color=='black'">
              <img style="width:50px" class="mr-2" src="/img/plan_biodiversite_logo.png">
          </div>

          <div v-else>
              <img style="width:50px" class="mr-2" src="/img/logo_white.png">
          </div>

          <div v-if="color=='black'" :class="color+' mx-0 px-0  fs0-5 bold'">
              PLAN BIODIVERSITÉ 2020-2023 <br/>
              DE LA STRATÉGIE BIODIVERSITÉ <br/>
              GENÈVE 2030
          </div>

          <div v-else :class="color+' mx-0 px-0  bold'">
              PLAN BIODIVERSITÉ 2020-2023 <br/>
              DE LA STRATÉGIE BIODIVERSITÉ <br/>
              GENÈVE 2030
          </div>

      </div>

  </div>
</template>
<script>
export default {
    name:"logo",
    props:["color"]
}
</script>

<style>

</style>
