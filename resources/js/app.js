import Vue from "vue";
import VueRouter from "vue-router";
import jQuery from "jquery";
import HeaderComponent from "./components/HeaderComponent";
import FooterComponent from "./components/FooterComponent";
import ExampleComponent from "./components/ExampleComponent";

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);

global.jquery = jQuery;
global.$ = jQuery;
window.$ = window.jQuery = require('jquery');

Vue.component('header-component', HeaderComponent);
Vue.component('example-component', ExampleComponent);
Vue.component('footer-component', FooterComponent);


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/spots',
            component: ExampleComponent
        },
    ]
});


const app = new Vue({
    el: '#app',
    router
});

