import axios from 'axios';

export const typeModule = {
    state: {
        item: [],
        status: false,
        options: [],
        error: '',
    },
    actions: {

    },
    mutations: {
        GET_TYPES: state => {
            axios.get('/api/types')
                .then(function (res) {
                    state.item = res.data.data
                    state.status = true,

                        state.item.map((item) => {
                            state.options.push({
                                code: item.id,
                                label: item.name,
                                type: 'type',
                                page:1
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
