require('./bootstrap');
window.Vue = require('vue');
import {routes} from './router';
import VueRouter from 'vue-router'
import App from './root/App';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import './asset/rs.css'
import './asset/rs.color.css'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);


//Register Routes
const router = new VueRouter({
    routes,
    mode: 'history'

})

Vue.component('HeaderPage', require('./components/HeaderPage.vue').default);

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
