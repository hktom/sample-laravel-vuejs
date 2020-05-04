import axios from 'axios';

export const actionModule = {
    state: {
        item: [],
        actions: {},
        action: {},
        all_actions: {},
        options: [],
        status: false,
        get_action: false,
        pagination: true,
        error: '',
    },
    actions: {
        FILTER_ACTION: ({ commit }, payload) => {
            if (payload.type != null) {

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
            state.pagination = false;
            state.status = false;
            state.item = [];
            state.all_actions.map((action) => {
                action.authors.map((actor) => {
                    if (actor.id === payload.code) {
                        state.item.push(action);
                    }
                })
            });

            state.status = true;

        },
        FILTER_ACTION_BY_STATUS: (state, payload) => {
            state.pagination = false;
            state.status = false;
            state.item = [];
            state.all_actions.map((action) => {
                action.states.map((item) => {
                    if (item.id === payload.code) {
                        state.item.push(action);
                    }
                })
            });

            state.status = true;
        },
        FILTER_ACTION_BY_TYPE: (state, payload) => {
            state.pagination = false;
            state.status = false;
            state.item = [];
            state.all_actions.map((action) => {
                action.types.map((item) => {
                    if (item.id === payload.code) {
                        state.item.push(action);
                    }
                })
            });
            state.status = true;
        },
        FILTER_ACTION_BY_ECHELLE: (state, payload) => {
            state.pagination = false;
            state.status = false;
            state.item = [];
            state.all_actions.map((action) => {
                action.echelles.map((echelle) => {
                    if (echelle.id === payload.code) {
                        state.item.push(action);
                    }
                })
            });
            state.status = true;
        },

        FILTER_ACTION_BY_PROJECT: (state, payload) => {
            state.pagination = false;
            state.status = false;
            state.item = [];
            state.all_actions.map((item) => {
                if (item.project_id == payload.code) {
                    state.item.push(item);
                }
            });
            state.status = true;
        },

        FIND_ACTION: (state, payload) => {
            state.pagination = false;
            state.status = false;
            state.item = [];
            state.all_actions.map((item) => {

                var name = item.name.toLowerCase();
                var description = item.short_description.toLowerCase();
                var str = payload.toLowerCase();

                if (name.search(str) > -1 || description.search(str) >-1) {
                    state.item.push(item);
                }
            });
            state.status = true;

        },

        SET_ACTION_DEFAULT: state => {
            state.pagination = true;
            state.item = state.actions.data;
        },

        GET_ACTIONS: (state, payload) => {
            state.status = false;
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
            state.get_action = false;
            axios.get(`/api/actions/${payload}`)
                .then(function (res) {
                    state.action = res.data.data[0]
                    state.get_action = true;
                })
                .catch(function (error) {
                    state.error = error;
                    console.log(error);
                })
        },
    },
    getters: {}
}
