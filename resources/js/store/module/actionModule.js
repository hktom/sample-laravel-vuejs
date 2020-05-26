import axios from 'axios';

export const actionModule = {
    state: {
        item: [],
        actions: {},
        filter_actions: {},
        action: {},
        all_actions: {},
        options: [],
        status: false,
        get_action: false,
        pagination: true,
        error: '',
        filter_payload:[],
        filter: {
            'echelle':null,
            'type':null,
            'status':null,
            'project':null,
            'actor':null,
        },
        default_filter:{
            'echelle':null,
            'type':null,
            'status':null,
            'project':null,
            'actor':null,
        }
    },
    actions: {
        //vue select filter option
        FILTER_ACTION: ({ commit }, payload) => {
                commit("GET_ACTIONS_BY_FILTER", payload);
                // switch (payload.type) {
                //     case 'actor':
                //         commit("FILTER_ACTION_BY_ACTOR", payload);
                //         break;

                //     case 'status':
                //         commit("FILTER_ACTION_BY_STATUS", payload);
                //         break;

                //     case 'type':
                //         commit("FILTER_ACTION_BY_TYPE", payload);
                //         break;

                //     case 'echelle':
                //         commit("FILTER_ACTION_BY_ECHELLE", payload);
                //         break;

                //     case 'project':
                //         commit("FILTER_ACTION_BY_PROJECT", payload);
                //         break;

                //     default:
                //         commit("SET_ACTION_DEFAULT");
                //         break;
                // }
        },
        FIND_ACTION: ({ commit }, payload) => {
            if (payload != null) {
                //commit("FIND_ACTION", payload);
                commit("GET_ACTIONS_BY_FILTER", payload);
            }
            else {
                commit("SET_ACTION_DEFAULT");
            }
        },
        GET_ACTIONS: ({ commit }, payload = 1) => {
            commit("GET_ACTIONS", payload);
        },

        // GET_ACTIONS_BY_FILTER:({commit}, payload, page)=> {
        //     commit("GET_ACTIONS_BY_FILTER", payload, page);
        // },

        SHOW_ACTION: ({ commit }, payload) => {
            commit("SHOW_ACTION", payload);
        },
    },
    mutations: {
        RESET_FILTER_ECHELLE:state=>state.filter.echelle=null,
        RESET_FILTER_STATUS:state=>state.filter.status=null,
        RESET_FILTER_TYPE:state=>state.filter.type=null,
        RESET_FILTER_ACTOR:state=>state.filter.actor=null,
        RESET_FILTER_PROJECT:state=>state.filter.project=null,

        // FILTER_ACTION_BY_ACTOR: (state, payload) => {
        //     state.filter.actor=payload;
        //     state.pagination = false;
        //     state.status = false;
        //     state.item = [];
        //     state.all_actions.map((action) => {
        //         action.authors.map((actor) => {
        //             if (actor.id === payload.code) {
        //                 state.item.push(action);
        //             }
        //         })
        //     });

        //     state.status = true;

        // },
        // FILTER_ACTION_BY_STATUS: (state, payload) => {
        //     state.filter.status=payload;
        //     state.pagination = false;
        //     state.status = false;
        //     state.item = [];
        //     state.all_actions.map((action) => {
        //         action.states.map((item) => {
        //             if (item.id === payload.code) {
        //                 state.item.push(action);
        //             }
        //         })
        //     });

        //     state.status = true;
        // },
        // FILTER_ACTION_BY_TYPE: (state, payload) => {
        //     state.filter.type=payload;
        //     state.pagination = false;
        //     state.status = false;
        //     state.item = [];
        //     state.all_actions.map((action) => {
        //         action.types.map((item) => {
        //             if (item.id === payload.code) {
        //                 state.item.push(action);
        //             }
        //         })
        //     });
        //     state.status = true;
        // },
        // FILTER_ACTION_BY_ECHELLE: (state, payload) => {
        //     state.filter.echelle=payload;
        //     state.pagination = false;
        //     state.status = false;
        //     state.item = [];
        //     state.all_actions.map((action) => {
        //         action.echelles.map((echelle) => {
        //             if (echelle.id === payload.code) {
        //                 state.item.push(action);
        //             }
        //         })
        //     });
        //     state.status = true;
        // },

        // FILTER_ACTION_BY_PROJECT: (state, payload) => {
        //     state.filter.project=payload;
        //     state.pagination = false;
        //     state.status = false;
        //     state.item = [];
        //     state.all_actions.map((item) => {
        //         if (item.project_id == payload.code) {
        //             state.item.push(item);
        //         }
        //     });
        //     state.status = true;
        // },

        FIND_ACTION: (state, payload) => {
            state.pagination = false;
            state.status = false;
            state.item = [];
            state.all_actions.map((item) => {

                var name = item.name.toLowerCase();
                var description = item.short_description.toLowerCase();
                var str = payload.toLowerCase();

                if (name.search(str) > -1 || description.search(str) > -1) {
                    state.item.push(item);
                }
            });
            state.status = true;

        },

        //sort filter default
        SET_ACTION_DEFAULT: state => {
            state.pagination = true;
            state.item = state.actions.data;
        },

        RESET_ALL_FILTER:({ commit }, state)=>{
            commit("RESET_FILTER_ECHELLE");
            commit("RESET_FILTER_STATUS");
            commit("RESET_FILTER_TYPE");
            commit("RESET_FILTER_ACTOR");
            commit("RESET_FILTER_PROJECT");
        },

        // filter action
        GET_ACTIONS_BY_FILTER: (state, payload) => {
            // SET_FILTER_LABEL(state, payload);
            switch (payload.type) {
                case 'actor':
                    state.filter.actor=payload;
                    break;
                case 'status':
                    state.filter.status=payload;
                    break;
                case 'type':
                    state.filter.type=payload;
                    break;
                case 'echelle':
                    state.filter.echelle=payload;
                    break;

                case 'project':
                    state.filter.project=payload;
                    break;

                default:
                    //state.filter=null;
                    break;
            }
            // SET_FILTER_LABEL(state, payload);
            state.filter_payload=payload;
            var url=`/api/actions/${payload.type}/${payload.code}?page=${payload.page}`;
            state.status = false;
            state.pagination = false;
            axios.get(url)
                .then(function (res) {
                    state.filter_actions = res.data
                    state.item = state.filter_actions.data
                    state.status = true;
                })
                .catch(function (error) {
                    state.error = error;
                    console.log(error);
                })
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
