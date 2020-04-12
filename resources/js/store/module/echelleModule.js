import axios from 'axios';

export const echelleModule = {
    state: {
        item:[],
        status:false,
        options:[],
        error:'',
    },
    actions: {

    },
    mutations: {
        GET_ECHELLES: state => {
            axios.get('/api/echelles')
                .then(function (res) {
                    state.item = res.data.data
                    state.status=true,

                    state.item.map((item) => {
                        state.options.push({ code: item.id, label: item.name, type: 'echelle' });

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
