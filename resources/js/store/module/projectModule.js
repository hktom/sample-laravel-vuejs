import axios from 'axios';

export const projectModule = {
    state: {
        item:[],
        projects: [],
        options: [],
        status:false,
        error:'',
    },
    actions: {
        FILTER_PROJECT: ({ commit }, payload) => {
            if (payload != null) {
                commit("FILTER_PROJECT", payload);
            }
            else {
                commit("SET_PROJECT_DEFAULT");
            }
        },
        FIND_PROJECT: ({ commit }, payload) => {
            if (payload != null) {
                commit("FIND_PROJECT", payload);
            }
            else {
                commit("SET_PROJECT_DEFAULT");
            }
        },
    },
    mutations: {
        FILTER_PROJECT: (state, payload) => {
                state.item = [];
                state.projects.map((item) => {
                    if (item.id == payload.code) {
                        state.item.push(item);
                    }
                })

        },

        FIND_PROJECT: (state, payload) => {
            state.item = [];
            state.projects.map((item)=>{

                if(item.name.toLowerCase().search(payload.toLowerCase())!== -1)
                {
                    state.item.push(item);
                }
            })

        },

        SET_PROJECT_DEFAULT: state => {
            state.item = state.projects;
        },

        GET_PROJECTS: state => {
            axios.get('/api/projects')
                .then(function (res) {
                    state.projects = res.data.data
                    state.item = state.projects
                    state.status=true,

                    state.projects.map((item) => {
                        state.options.push({ code: item.id, label: item.name, type: 'project' });

                    });

                })
                .catch(function (error) {
                    state.error = error;
                    console.log(error);
                })
        },
    },
    getters: {}
  }
