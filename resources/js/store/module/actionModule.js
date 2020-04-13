import axios from 'axios';

export const actionModule = {
    state: {
        item: [],
        actions: {},
        action:{},
        all_actions: {},
        options: [],
        status: false,
        error: '',
    },
    actions: {
        FILTER_ACTION: ({ commit }, payload) => {
            if (payload != null) {

                switch (payload.type) {
                    case 'actor':
                        commit("FILTER_ACTION_BY_ACTOR", payload);
                        break;

                    case 'status':
                        commit("FILTER_ACTION_BY_STATUS", payload);
                        break;

                    case 'type':
                        commit("FILTER_ACTION_BY_TYPE", payload);
                        break;

                    case 'echelle':
                        commit("FILTER_ACTION_BY_ECHELLE", payload);
                        break;

                    case 'project':
                        commit("FILTER_ACTION_BY_PROJECT", payload);
                        break;

                    default:
                        commit("SET_ACTION_DEFAULT");
                        break;
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
        GET_ACTIONS: ({ commit }, payload = 1) => {
            commit("GET_ACTIONS", payload);
        },
        SHOW_ACTION: ({ commit }, payload) => {
            commit("SHOW_ACTION", payload);
        },
    },
    mutations: {
        FILTER_ACTION_BY_ACTOR: (state, payload) => {
            state.item = [];
            state.all_actions.map((action) => {
                action.authors.map((actor) => {
                    if (actor.id === payload.code) {
                        state.item.push(action);
                    }
                })
            })

        },
        FILTER_ACTION_BY_STATUS: (state, payload) => {
            state.item = [];
            state.all_actions.map((action) => {
                action.states.map((state) => {
                    if (state.id === payload.code) {
                        state.item.push(action);
                    }
                })
            })

        },
        FILTER_ACTION_BY_TYPE: (state, payload) => {
            //state.item = [];
            state.all_actions.map((action) => {
                action.types.map((type) => {
                    if (type.id === payload.code) {
                        state.item.push(action);
                    }
                })
            })

        },
        FILTER_ACTION_BY_ECHELLE: (state, payload) => {
            state.item = [];
            state.all_actions.map((action) => {
                action.echelles.map((echelle) => {
                    if (echelle.id === payload.code) {
                        state.item.push(action);
                    }
                })
            })

        },

        FILTER_ACTION_BY_PROJECT: (state, payload) => {
            state.item = [];
            state.all_actions.map((item) => {
                if (item.project_id == payload.code) {
                    state.item.push(item);
                }
            })
        },

        FIND_ACTION: (state, payload) => {
            state.item = [];
            state.all_actions.map((item) => {

                if (item.name.toLowerCase().search(payload.toLowerCase()) !== -1) {
                    state.item.push(item);
                }
            })

        },

        SET_ACTION_DEFAULT: state => {
            state.item = state.actions.data;
        },

        GET_ACTIONS: (state, payload) => {
            axios.get(`/api/actions?page=${payload}`)
                .then(function (res) {
                    state.actions = res.data
                    state.item = state.actions.data
                    state.status = true;
                })
                .catch(function (error) {
                    state.error = error;
                    console.log(error);
                })
        },
        GET_ALL_ACTIONS: state => {
            axios.get('/api/all/actions')
                .then(function (res) {
                    state.all_actions = res.data.data;
                    state.status = true;
                })
                .catch(function (error) {
                    state.error = error;
                    console.log(error);
                })
        },
        SHOW_ACTION: (state, payload) => {
            axios.get(`/api/actions/${payload}`)
                .then(function (res) {
                    state.action = res.data.data[0]
                    state.status = true;
                })
                .catch(function (error) {
                    state.error = error;
                    console.log(error);
                })
        },
    },
    getters: {}
}
