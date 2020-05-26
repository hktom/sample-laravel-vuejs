import axios from 'axios';

export const statusModule = {
    state: {
        item: [],
        status: false,
        options: [],
        error: '',
    },
    actions: {

    },
    mutations: {
        GET_STATUS: state => {
            axios.get('/api/states')
                .then(function (res) {
                    state.item = res.data.data
                    state.status = true,

                        state.item.map((item) => {
                            state.options.push({
                                code: item.id,
                                label: item.name,
                                type: 'status',
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
