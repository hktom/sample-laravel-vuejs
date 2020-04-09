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
    </div>
</template>

<script>
export default {
    props:["description", "baniere"],
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
</style>
