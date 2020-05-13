require('./bootstrap');

// // window.Vue = require('vue');
// import Vue from 'vue';
// // import 'example-component' from './components/ExampleComponent.vue';
// // 
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('check-component', require('./components/CheckComponent.vue').default);

// const app = new Vue({
//     el: '#app',
// });
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// import App from './views/App'
import Router from './components/Router'
import Check from './components/CheckComponent'
import Example from './components/ExampleComponent'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'check',
            component: Check
        },
        {
            path: '/example',
            name: 'example',
            component: Example,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { Router },
    router,
});