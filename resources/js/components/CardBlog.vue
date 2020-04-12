<template>
  <div id="cardBlog" class="py-4 px-4">
      <!-- <h1>{{article}}</h1> -->
      <b-row v-scroll-reveal>
          <b-col lg="4" md="12">
              <img :src="'uploads/'+article.image" class="w100 y10 cover center"/>
          </b-col>

          <b-col lg="8" md="12">
              <h2 class="lighter"> {{ article.name}} </h2>
              <p>
                  Auteurs:
                  <span v-for="author in article.authors" :key="author.id">
                  <span class="bold fs0-9"> {{author.name}}  | </span>
                  </span>
              </p>
              <p>
                  {{ article.short_description }} [...]<br/>
                  <router-link :to="{name: 'showAction', params: { id: article.id }}" class="link-article mx-3">Details de l'action
                      <font-awesome-icon icon="arrow-circle-right" />
                  </router-link>
              </p>


          </b-col>

      </b-row>
  </div>
</template>

<script>
export default {
props: ['article'],
data: function(){
    return {

    }
}


}
</script>

<style>

#cardBlog{
    /* border:2px solid gray; */
    /* box-shadow: 2px 2px 2px black;
    margin:15px 0px 15px 0px; */
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    /* padding: 2em 4em !important; */
    margin-bottom: 1.2em;
    margin-left: 15px;
    margin-right: 15px;
    border: 1px solid #ddd;
    transition: transform 0.3s;
}

#cardBlog:hover{
    transform: scale(1.02);
}

.link-article{
    color: #17A2B8;font-weight: bold;font-size:15px
}

</style>
