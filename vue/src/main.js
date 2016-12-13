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

const router = new VueRouter({
    routes: routes
});

function escapeHtml(text) {
    var div = document.createElement('div');
    div.appendChild(document.createTextNode(text));
    return div.innerHTML;
}

Vue.component('formated-chip-text', Vue.extend({
    props: ['text'],
    computed: {
        html: function(){
            var html = escapeHtml(this.text);
            var htmlUnderscore = escapeHtml('_');
            var htmlTilde = escapeHtml('~');
            html = html.replace(new RegExp(htmlTilde+'([a-zA-Z0-9'+htmlUnderscore+']+)'), '<span class="neg">$1</span>');
            html = html.replace(new RegExp('([a-zA-Z0-9]+)'+htmlUnderscore+htmlUnderscore+'([0-9]+)'), '$1<sub>$2</sub>');
            return html;
        }
    },
    template: '<div v-html="html"></div>'
}));

Vue.filter('testfilter', function(value){
    return value.replace(RegExp('~([a-zA-Z0-9]+)'), '<span class="neg">{{$1}}</span>');
});

const app = new Vue({
    router: router
}).$mount('#app');

// Now the app has started!