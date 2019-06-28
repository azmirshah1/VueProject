require('./bootstrap');
import Index from './components/index.vue'
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';

import routes from './routes';


window.Vue = require('vue');
window.Vue.use(VueRouter);
Vue.use(VueAxios, axios);

Vue.component('index', Index);
Vue.component('vue-pagination', require('laravel-vue-pagination'));

const router = new VueRouter({ routes });
const app = new Vue({ router }).$mount('#app');
