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
        error: '',
        project_options: [],
        action_options: [],
        actor_options: [],
        project_selected: '',
        action_selected: '',
        actor_selected: '',
    },
    getters: {
        doubleClicks: state => {
            return state.counter * 2;
        }
    },
    actions: {
        SET_ARTICLE_ACTION: ({ commit }, payload) => {
            if (payload != null) {
                commit("SET_ARTICLE", payload);
            }
            else {
                commit("SET_ARTICLE_DEFAULT");
            }
        }
    },
    mutations: {
        increment: state => {
            state.counter++;
        },

        SET_ARTICLE_DEFAULT: state => {
            state.articles = state.projects;
        },

        SET_ARTICLE: (state, payload) => {

            if (payload.type == "project") {
                state.articles = [];
                state.projects.map((item) => {
                    if (item.id == payload.code) {
                        state.articles.push(item);
                    }
                })
            }

            if (payload.type == "actor") {
                state.articles = [];
                state.projects.map((item) => {
                    item.actors.map((actor) => {

                        if (actor.id == payload.id) {
                            state.articles.push(item);
                        }

                    })

                })

            }


        },

        GET_PROJECTS: state => {
            axios.get('/api/projects')
                .then(function (res) {
                    state.projects = res.data.data
                    state.articles = state.projects

                    //set options filter
                    state.projects.map((item) => {
                        state.project_options.push({ code: item.id, label: item.name, type: 'project' });

                    });

                })
                .catch(function (error) {
                    // handle error
                    state.error = error;
                    console.log(error);
                })
        },

        GET_ACTIONS: state => {
            axios.get('/api/actions')
                .then(function (res) {
                    state.actions = res.data.data
                    console.log(res);
                })
                .catch(function (error) {
                    // handle error
                    state.error = error;
                    console.log(error);
                })
        },

        GET_ACTORS: state => {
            axios.get('/api/actors')
                .then(function (res) {
                    state.actors = res.data.data
                    console.log(res);

                    //set options filter
                    state.actors.map((item) => {
                        state.actor_options.push({ code: item.id, label: item.name, type: 'actor' });

                    });
                })
                .catch(function (error) {
                    // handle error
                    state.error = error;
                    console.log(error);
                })
        },
    }
})
