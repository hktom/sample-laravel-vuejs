<template>
  <div id="cardBlog" class="py-4 px-4 cursor-pointer" @click="seeAction(article.id)">
      <!-- <h1>{{article}}</h1> -->
      <b-row v-scroll-reveal>
          <b-col lg="2" md="12">
              <img :src="'uploads/'+article.project.icon" class="w100 cover center"/>
          </b-col>

          <b-col lg="10" md="12">
              <h3 class="lighter">
                  <router-link :to="{name: 'showAction', params: { id: article.id }}" class="link-title-article">
                      <span :style="'color:'+article.project.color">Action {{ article.code }}</span><br/>
                      {{ article.name}}
                  </router-link>
                   </h3>
              <p>
                  Elaboré(e) par
                  <span v-for="author in article.authors" :key="author.id">
                  <span class="fs0-9" v-if="author.is_a_person"> {{author.name}}  /
                  </span>
                  </span>

                  (
                  <span v-for="author in article.authors" :key="author.id+500">
                    <span class="fs0-9" v-if="!author.is_a_person">
                   {{author.name}},
                  </span>
                  </span>
                  )

              </p>
              <p>
                  {{ article.short_description.slice(0, 255) }} [...]<br/>
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
    transition: 0.3s;
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
    color: #17A2B8;font-size:15px
}
.link-article:hover{
    text-decoration: none;
    color:black;
}

</style>
