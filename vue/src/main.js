import Vue from 'vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VueResource);

const store = require('./vuex/store');

import HomePage from './components/HomePage'
import Search from './components/Search'
import ChipPage from './components/ChipPage'
import FormattedChipText from './components/FormattedChipText'
import ChipPackage from './components/ChipPackage'
import SvgComponent from './components/SvgComponent'
import ChipDB from './components/ChipDB'

const routes = [
    { path: '/', component: HomePage },
    { path: '/chip/:chip', component: ChipPage }
];

const router = new VueRouter({
    routes: routes
});

Vue.component(Search.name, Search);
Vue.component(FormattedChipText.name, FormattedChipText);
Vue.component(ChipPackage.name, ChipPackage);
Vue.component(SvgComponent.name, SvgComponent);
//Vue.component(ChipDB.name, ChipDB);

window.chipdb = new Vue(ChipDB).$mount('#chip-db');

const app = new Vue({
    store: store,
    router: router
}).$mount('#app');
window.app = app;