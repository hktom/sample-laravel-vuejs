<template>
<div v-scroll-reveal class="w100 h100">
    <div class="card w100 h100 scala cursor-pointer" @click="_gotToProject(article.slug)">
        <img
            :src="'uploads/' + article.image"
            class="card-img-top cover w100 h40"
            alt=""
        />
        <div class="card-body">
            <h4 class="card-title">
                {{ article.name }}
            </h4>
            <p class="card-text">
                {{
                    article.vision.slice(0, 200)
                }}[...]
            </p>

            <b-button pill style="background-color:#05668D">
                <div class="card-link">
                Voir les détails
                <font-awesome-icon
                    icon="arrow-circle-right"
                />
                </div>
            </b-button>

        </div>
    </div>
</div>
</template>
<script>
export default {
    name:'card',
    props:['article'],
    methods:{
        _gotToProject(articleId){
             return this.$router.push({ name: 'shwoProject', params: { id: articleId } });
        }
    }

};
</script>

<style>
.card {
    transition: 0.3s;
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
}
.scala:hover {
    transform: scale(1.01);
}

.card-link{color: white;text-decoration: none};
.card-link:hover{color: white;text-decoration: none};

.btn-go {
    background-color: rgb(23, 162, 184);
    border: none !important;
    font-size: 0.9em;
    color: white !important;
    font-weight: bold !important;
    padding: 10px 20px !important;
    border-radius: 300px !important;
}

.btn-go:hover {
    background-color: rgb(7, 54, 61);
}
</style>
