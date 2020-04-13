<template>
      <div id="baniere" class="w100 y15 relative ofhidden">
      <div id="bg-image" class="w100"
      :style="'height:110%;background-image: url(/img/'+baniere+')'">
      </div>
      <div id="bg-text" class="absolute mt0">
        <div class="fitme p8">
          <h2 class="w75 text-header">
            {{ description }}
          </h2>
        </div>
      </div>

      <div class="btn-back" v-if="btnback">

           <router-link :to="{name: 'home'}" class="back-link">
          <font-awesome-icon icon="arrow-circle-left" />
          Revenir aux actions
           </router-link>
      </div>

    </div>
</template>

<script>
export default {
    props:["description", "baniere", "btnback"],
}
</script>

<style>
#bg-image {
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  -webkit-filter: blur(4px );
      filter: blur(4px);
    transform: scale(1.1);
}
.text-header{color: white;text-shadow: 0 0 1em black;font-weight: normal;}

.back-link{
    color: white;
    text-decoration: none;
}

.back-link:hover{
    text-decoration: none;
    color: white
}

.btn-back{
    background-color: rgb(23, 162, 184);
    border: none !important;
    font-size: 0.9em;
    color: white !important;
    font-weight: bold !important;
    padding: 10px 20px !important;
    border-radius: 300px !important;
    position: absolute;
    top:10em;
    left: 10em;
}

.btn-back:hover{
    background-color: rgb(7, 54, 61);
}
</style>
