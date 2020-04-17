export const paramsModule = {
    state: {
        filter:"champ d'application"
    },
    actions: {
        SET_FILTER_BADGE:({commit}, payload)=>{
            return commit("BADGE_FILTER_BY", payload);
        }
    },
    mutations: {
        BADGE_FILTER_BY: (state, payload) => {
            return state.filter=payload;
        },
    },
    getters: {}
}
