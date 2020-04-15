<template>
<div v-scroll-reveal>
  <div id="cardBlog" class="py-4 px-4 cursor-pointer" @click="seeAction(article.id)">
      <!-- <h1>{{article}}</h1> -->
      <b-row>
          <b-col lg="4" md="12">
              <img :src="'uploads/'+article.project.icon" class="w100 px-4 py-4 cover center"/>
          </b-col>

          <b-col lg="8" md="12">

              <h4>
                  <span class="bold">
                      Action {{ article.code }}
                  </span>

                  <b-badge variant="light">

                          <font-awesome-icon icon="check-circle" :style="{ color: '#05668D' }" />


                      <span class="fs0-8" :style="{color: '#05668D'}">
                          {{ filter }}
                      </span>
                  </b-badge>
              </h4>

              <h4 class="bold" style="font-weight:bold">
                      {{ article.name}}
              </h4>

              <p>
                  Elaboré(e) par
                  <span v-for="author in article.authors" :key="author.id">
                  <span class="fs0-9 bold" v-if="author.is_a_person"> {{author.name}}  /
                  </span>
                  </span>

                  (
                  <span v-for="author in article.authors" :key="author.id+500">
                    <span class="fs0-9 bold" v-if="!author.is_a_person">
                   {{author.name}},
                  </span>
                  </span>
                  )

              </p>
              <p>
                  {{ article.short_description.slice(0, 255) }} [...]
              </p>

              <p class="link-article italic">
                      Details de l'action
                      <!-- <font-awesome-icon icon="chevron-right" /> -->
              </p>


          </b-col>

      </b-row>
  </div>
  </div>
</template>

<script>
export default {
props: ['article'],
data: function(){
    return {

    }
},

computed:{
    filter(){
        return this.$store.state.params.filter;
    }
},
methods:{
    seeAction(articleId){
        return this.$router.push({ name: 'showAction', params: { id: articleId } });
        //return this.$router.push({ path: `/action/${articleId}`});
    }
}


}
</script>

<style>

#cardBlog{
    /* border:2px solid gray; */
    /* box-shadow: 2px 2px 2px black;
    margin:15px 0px 15px 0px; */
    /* padding: 2em 4em !important; */
    border-radius: 5px;
    margin-bottom: 1.2em;
    margin-left: 15px;
    margin-right: 15px;
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    transition: 0.2s;
}

#cardBlog:hover{
    transform: scale(1.01);
}

.link-title-article{
    color: black;
    text-decoration: none;
}

.link-title-article:hover{
    color:black;
    text-decoration: none;
}

.link-article{
    /* color: #17A2B8; */
    font-size:16px;
    display: inline-block;
    /* padding: 4px 5px; */
    transition: 0.1s;
}
.link-article:hover{
    text-decoration: none;
    /* color:black; */
    /* background-color: #17A2B8;
    color: white; */
    color: #17A2B8;
}

</style>
