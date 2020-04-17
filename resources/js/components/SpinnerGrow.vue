<template>
  <div class="text-center" id="spinner">
      <div class="d-flex align-items-center w100 h100 justify-content-center">
          <b-spinner type="grow" label="Spinning" style="width: 5rem; height: 5rem;color:#05668D"/>
      </div>
  </div>
</template>

<script>
export default {

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
