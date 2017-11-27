
import Vue from 'vue';
import axios from 'axios';

import App from './components/App.vue';
import router from './routes';
window.Vue = require('vue');

Vue.component('app', App);

const app = new Vue({
    router

}).$mount('#vue');
