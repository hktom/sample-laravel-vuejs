<template>
  <div id="spinner" v-if="!small">
      <div class="d-flex align-items-center w100 h100 justify-content-center">
          <vue-simple-spinner line-fg-color="#05668D" size="50"/>
      </div>

  </div>
  <div id="spinner-small" v-else>
      <div class="d-flex align-items-center w100 h100 justify-content-center">
          <vue-simple-spinner line-fg-color="#05668D" size="50"/>
      </div>

  </div>
</template>

<script>
import Spinner from 'vue-simple-spinner'
export default {
props:['small'],
components: {
    Spinner
  }
}
</script>

<style>
#spinner{
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 9999;
    background-color: white;
}
#spinner-small{
    width: 100%;
    height: auto;
    position: absolute;
    z-index: 9999;
    background-color: white;
}
</style>
