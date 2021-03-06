require('./bootstrap');
window.Vue = require('vue');
import { routes } from './router';
import VueRouter from 'vue-router'
import App from './root/App';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'vue-select/dist/vue-select.css';
import './asset/rs.css'
import './asset/rs.color.css'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import vSelect from 'vue-select'
import { store } from './store/store'
import VueScrollReveal from 'vue-scroll-reveal';
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import vueHeadful from 'vue-headful';
library.add(fas)

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
    mode: 'history',
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
      }

})

Vue.component('vue-headful', vueHeadful);
Vue.component('v-select', vSelect)
// Vue.component('FilterForm', require('./components/FilterForm.vue').default);
Vue.component('Baniere', require('./components/Baniere.vue').default);
Vue.component('SpinnerGrow', require('./components/SpinnerGrow.vue').default);
Vue.component('HeaderPage', require('./components/HeaderPage.vue').default);
Vue.component('FooterPage', require('./components/FooterPage.vue').default);
Vue.component('CardBlog', require('./components/CardBlog.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.component('pulse-loader', require('vue-spinner/src/PulseLoader.vue'));

const app = new Vue({
    store,
    render: h => h(App),
    router,
    // el: '#app',
    // components: { App },
}).$mount("#app");
