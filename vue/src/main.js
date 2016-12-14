import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

window.chipdb = require('./assets/chipdb.json');

function escapeHtml(text) {
    var div = document.createElement('div');
    div.appendChild(document.createTextNode(text));
    return div.innerHTML;
}

import HomePage from './components/HomePage'
import Search from './components/Search'
import ChipPage from './components/ChipPage'
import FormattedChipText from './components/FormattedChipText'

const routes = [
    { path: '/', component: HomePage },
    { path: '/chip/:chip', component: ChipPage }
];

const router = new VueRouter({
    routes: routes
});

Vue.component(Search.name, Search);
Vue.component(FormattedChipText.name, FormattedChipText);

const app = new Vue({
    router: router
}).$mount('#app');