<template>
  <div class="text-center" id="spinner">
      <div class="d-flex align-items-center w100 h100 justify-content-center">
          <!-- <b-spinner type="grow" label="Spinning" style="width: 5rem; height: 5rem;color:#05668D"/> -->
          <vue-simple-spinner line-fg-color="#05668D" size="50"/>
      </div>

  </div>
</template>

<script>
import Spinner from 'vue-simple-spinner'
export default {
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
</style>
