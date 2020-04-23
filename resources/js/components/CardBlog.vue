<template>
<div v-scroll-reveal>
  <div id="cardBlog" class="py-4 px-4 cursor-pointer" @click="seeAction(article.slug)">
      <!-- <h1>{{article}}</h1> -->
      <b-row>
          <b-col lg="3" md="12">
              <img :src="'uploads/'+article.project.icon" style="" class="w100 vls-p50 cover center"/>
          </b-col>

          <b-col lg="9" md="12">

              <div>
                  <h4 class="bold inline-block" :style="'font-weight:bold;color:'+article.project.color">
                      ACTION {{ article.code }}
                  </h4>

                  <b-badge variant="light">

                          <!-- <font-awesome-icon icon="check-circle" :style="{ color: '#05668D' }" /> -->
                      <span class="fs1-2" :style="{color: '#05668D'}">
                          {{ filter=="champ d'application"? `${article.project.name}` :filter }}
                      </span>

                  </b-badge>
              </div>

              <h4 class="bold" style="font-weight:bold">
                      {{ article.name}}
              </h4>

              <p>
                  Elaboré(e) par
                  <Structure view="2" :collection="article.authors"/>
                  <span v-if="organisations.length > 0">(<Structure view="3" :collection="article.authors"/>)</span>

              </p>
              <p v-html="article.short_description.slice(0, 255)+'...'"></p>

            <b-button pill style="background-color:#05668D">
                <div class="card-link">
                Details de l'action
                <font-awesome-icon
                    icon="arrow-circle-right"
                />
                </div>
            </b-button>

              <!-- <p class="link-article italic">
                      Details de l'action
              </p> -->


          </b-col>

      </b-row>
  </div>
  </div>
</template>

<script>
import Structure from "./Structure";
export default {
    components:{
        Structure
    },
props: ['article'],
data: function(){
    return {
        users: [],
        organisations: [],
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
    },

    fill() {
            this.article.authors.map((item) => {
                if(item.is_a_person) {
                    this.users.push(item);
                } else {
                    this.organisations.push(item);
                }
            });
        },
},

mounted(){
    this.fill();
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
