import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        counter: 0,
        articles: [],
        actors: [],
        projects: [],
        actions: [],
        error:'',
        project_options:[],
        action_options:[],
        actor_options:[],
        myValue:'',
    },
    getters: {
        doubleClicks: state => {
            return state.counter * 2;
        }
    },
    mutations: {
        increment: state => {
            state.counter++;
        },

        SET_ARTICLE:(state, article_type=null)=>{

            // if(article_type==null || article_type==""){
            //     state.articles=state.projects
            // }
            state.articles=state.projects
            console.log(`DEBBUG ${state.articles}`);
        },

        GET_PROJECTS: state => {
            axios.get('/api/projects')
                .then(function (res) {
                    state.projects=res.data.data
                    state.articles=state.projects
                    console.log(res);

                    state.projects.map((item)=>{
                        state.project_options.push({code:item.id, label:item.name});

                    });

                })
                .catch(function (error) {
                    // handle error
                    state.error=error;
                    console.log(error);
                })
        },

        GET_ACTIONS: state => {
            axios.get('/api/actions')
                .then(function (res) {
                    state.actions=res.data.data
                    console.log(res);
                })
                .catch(function (error) {
                    // handle error
                    state.error=error;
                    console.log(error);
                })
        },

        GET_ACTORS: state => {
            axios.get('/api/actors')
                .then(function (res) {
                    state.actors=res.data.data
                    console.log(res);
                })
                .catch(function (error) {
                    // handle error
                    state.error=error;
                    console.log(error);
                })
        },
    }
})
