<template>
<div v-scroll-reveal class="w100 px-3">
<div class="w100 mauto p-4" id="cardBlog">
    <b-row class="cursor-pointer">
          <b-col lg="3" md="12" @click="seeAction(article.slug)" class="ss-m0">
              <img :src="'uploads/'+article.project.icon" style="" class="w100 vls-p50 cover center"/>
          </b-col>

          <b-col lg="9" md="12" class="ss-m0">

              <div>
                  <h3 class="bold inline-block ss-fs1-3" :style="'font-weight:bold;color:'+article.project.color" @click="seeAction(article.slug)">
                      ACTION {{ article.code }}
                  </h3>

                  <b-badge variant="light">
                      <span class="fs1-2 cursor-pointer card-field-link" @click="seeField(article.project.slug)">
                          {{ article.project.name }}
                      </span>

                  </b-badge>
              </div>

              <h2 class="bold ss-fs1 fs1-5" style="font-weight:bold" @click="seeAction(article.slug)">{{ article.name}}</h2>

              <p
              class="ss-hidden"
              @click="seeAction(article.slug)"
              v-html="article.short_description"></p>

            <b-button pill style="background-color:#05668D"
            @click="seeAction(article.slug)"
            class="btn-card-link">
                <div class="card-link">
                Details de l'action
                <font-awesome-icon
                    icon="arrow-circle-right"
                />
                </div>
            </b-button>

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
    seeAction(slug){
        return this.$router.push({ name: 'showAction', params: { id: slug } });
        //return this.$router.push({ path: `/action/${articleId}`});
    },

    seeField(slug){
        return this.$router.push({ name: 'showProject', params: { id: slug } });
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
    /* margin-left: 15px; */
    /* margin-right: 15px; */
    border-radius: 5px;
    margin-bottom: 1.2em;
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

.card-field-link{
    color: #05668D;
}

.card-field-link:hover{
    color: #07363D;
}

.btn-card-link:hover{
    background-color: #07363D !important;
}

</style>
