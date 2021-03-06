
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import routes from './routes';
const router = new VueRouter({
    routes
});

import Pagination from './plugins/pagination';
Vue.use(Pagination);

Vue.component('spinner', require('vue-simple-spinner'));

import Admin from './Admin.vue';

new Vue({
    router,
    render: h => h(Admin)
}).$mount('#app');
