<template>
      <div id="baniere" class="w100 y15 relative ofhidden ms-y10 ss-y10">

      <div id="bg-image" class="w100"
      :style="'height:110%;background-image: url('+baniere+')'">
      </div>

      <div id="bg-text" class="absolute mt0 fitme py-5">
        <div class="w80 mauto">
            <div class="px-3 py-2 text-header ms-fs1 ss-fs1 lms-fs1-3" v-html="description">
            </div>
        </div>
      </div>

      <div class="btn-back" v-if="btnback">

           <div class="back-link cursor-pointer" @click="_goBack">
          <font-awesome-icon icon="arrow-circle-left" />
          Revenir aux actions
           </div>
      </div>

      <div class="btn-back" v-if="btnbackProject">

           <div class="back-link cursor-pointer" @click="_goBack">
          <font-awesome-icon icon="arrow-circle-left" />
          Revenir aux projects
           </div >
      </div>


    </div>
</template>

<script>
export default {
    props:["description", "baniere", "btnback", "btnbackProject", "action_id", "btnBackAction"],
    methods:{
        _goBack(){
             return this.$router.go(-1);
        }
    }
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
.text-header{
    /* color: white;
    text-shadow: 0 0 1em black;
    font-weight: normal; */
    /* font-weight: normal; */
     color: #eee;
    text-shadow: 0 0 0.2em #000;
    font-size: 1.6rem;
    }

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
    left: 13em;
}

.btn-back:hover{
    background-color: rgb(7, 54, 61);
}
</style>
