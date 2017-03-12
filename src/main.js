window.stringContains = function(haystack, needle, caseSensitive) {
    caseSensitive = typeof(caseSensitive) == "undefined" ? false : !!caseSensitive;
    if(!caseSensitive) {
        haystack = haystack.toUpperCase();
        needle = needle.toUpperCase();
    }
    return haystack.indexOf(needle) != -1;
};

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

const app = new Vue({
    store: store,
    router: router,
    computed: {
        loaded: function() {
            return this.$store.chipdb.state.loaded;
        }
    }
}).$mount('#app');
window.app = app;

app.$store.chipdb.dispatch('fetch');