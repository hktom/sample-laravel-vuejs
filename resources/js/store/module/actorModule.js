import axios from 'axios';

export const actorModule = {
    state: {
        item: [],
        actors: [],
        options: [],
        status: false,
        error: '',
    },
    actions: {
        FILTER_ACTOR: ({ commit }, payload) => {
            if (payload != null) {
                commit("FIND_ACTOR", payload);
            }
            else {
                commit("SET_ACTOR_DEFAULT");
            }
        },
        FIND_ACTOR: ({ commit }, payload) => {
            if (payload != null) {
                commit("FIND_ACTOR", payload);
            }
            else {
                commit("SET_ACTOR_DEFAULT");
            }
        },
    },
    mutations: {
        SET_ACTOR: (state, payload) => {

            state.item = [];
            state.actors.map((item) => {
                if (item.id == payload.code) {
                    state.item.push(item);
                }
            })

        },

        FIND_ACTOR: (state, payload) => {
            state.item = [];
            state.actors.map((item) => {

                if (item.name.toLowerCase().search(payload.toLowerCase()) !== -1) {
                    state.item.push(item);
                }
            })

        },

        SET_ACTOR_DEFAULT: state => {
            state.item = state.actors;
        },

        GET_ACTORS: state => {
            axios.get('/api/actors')
                .then(function (res) {
                    state.actors = res.data.data
                    state.item = state.actors
                    state.status = true,

                    //vue select options
                        state.actors.map((item) => {
                            var sigle=item.sigle!=null?`${item.sigle} : `:``;
                            state.options.push({
                                code: item.id,
                                label: sigle+item.name,
                                title:item.name,
                                sigle: sigle,
                                type: 'actor',
                                page:1
                                //label: item.sigle!=null?item.sigle:item.name,
                            });

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
