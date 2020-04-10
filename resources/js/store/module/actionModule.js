import axios from 'axios';

export const actionModule = {
    state: {
        item:[],
        actions: [],
        options: [],
        status:false,
        error:'',
    },
    actions: {
        FILTER_ACTION: ({ commit }, payload) => {
            if (payload != null) {
                if(payload.type=="actor")
                {

                    commit("FILTER_ACTION_BY_ACTOR", payload);
                }

                if(payload.type=="status")
                {
                    commit("FILTER_ACTION_BY_STATUS", payload);
                }

                if(payload.type=="type")
                {
                    commit("FILTER_ACTION_BY_TYPE", payload);
                }
                else
                {
                    commit("FILTER_ACTION", payload);
                }
            }
            else {
                commit("SET_ACTION_DEFAULT");
            }
        },
        FIND_ACTION: ({ commit }, payload) => {
            if (payload != null) {
                commit("FIND_ACTION", payload);
            }
            else {
                commit("SET_ACTION_DEFAULT");
            }
        },
    },
    mutations: {
        FILTER_ACTION_BY_ACTOR: (state, payload) => {
                state.item = [];
                state.actions.map((action) => {
                    action.actors.map((actor)=>{
                        if(actor.id===payload.code)
                        {
                            state.item.push(action);
                        }
                    })
                })

        },
        FILTER_ACTION_BY_STATUS: (state, payload) => {
                state.item = [];
                state.actions.map((action) => {
                    action.state.map((state)=>{
                        if(state.id===payload.code)
                        {
                            state.item.push(action);
                        }
                    })
                })

        },
        FILTER_ACTION_BY_TYPE: (state, payload) => {
                state.item = [];
                state.actions.map((action) => {
                    action.ponc.map((ponc)=>{
                        if(ponc.id===payload.code)
                        {
                            state.item.push(action);
                        }
                    })
                })

        },

        FILTER_ACTION: (state, payload) => {
                state.item = [];
                state.actions.map((item) => {
                    if (item.id == payload.code) {
                        state.item.push(item);
                    }
                })

        },

        FIND_ACTION: (state, payload) => {
            state.item = [];
            state.actions.map((item)=>{

                if(item.name.toLowerCase().search(payload.toLowerCase())!== -1)
                {
                    state.item.push(item);
                }
            })

        },

        SET_ACTION_DEFAULT: state => {
            state.item = state.actions;
        },

        GET_ACTIONS: state => {
            axios.get('/api/actions')
                .then(function (res) {
                    state.actions = res.data.data
                    state.item = state.actions
                    state.status=true,

                    state.actions.map((item) => {
                        state.options.push({ code: item.id, label: item.name, type: 'action' });

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
