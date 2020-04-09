require('./bootstrap');
window.Vue = require('vue');
import {routes} from './router';
import VueRouter from 'vue-router'
import App from './root/App';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'vue-select/dist/vue-select.css';
import './asset/rs.css'
import './asset/rs.color.css'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import vSelect from 'vue-select'
import {store} from './store/store'
import VueScrollReveal from 'vue-scroll-reveal';

Vue.config.productionTip = false

Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
//Vue.use(VueScrollReveal);
Vue.use(VueScrollReveal, {
    class: 'v-scroll-reveal',
    duration: 800,
    scale: 1,
    distance: '10px',
    mobile: true
  });

//Register Routes
const router = new VueRouter({
    routes,
    mode: 'history'

})

Vue.component('v-select', vSelect)
Vue.component('SpinnerGrow', require('./components/SpinnerGrow.vue').default);
Vue.component('HeaderPage', require('./components/HeaderPage.vue').default);
Vue.component('FooterPage', require('./components/FooterPage.vue').default);
Vue.component('CardBlog', require('./components/CardBlog.vue').default);

const app = new Vue({
    store,
    render: h =>h(App),
    router,
    // el: '#app',
    // components: { App },
}).$mount("#app");
