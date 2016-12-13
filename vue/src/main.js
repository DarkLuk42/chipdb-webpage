import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

window.chipdb = require('./assets/chipdb.json');

import HomePage from './components/HomePage'
import ChipPage from './components/ChipPage'

const routes = [
    { path: '/', component: HomePage },
    { path: '/chip/:chip', component: ChipPage }
];

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    routes // short for routes: routes
});

// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
const app = new Vue({
    router
}).$mount('#app');

// Now the app has started!