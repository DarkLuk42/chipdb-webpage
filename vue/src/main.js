import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
Vue.use(VueRouter);
Vue.use(VueResource);

if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker [registration]', registration.scope);
        }).catch(function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    });

    /*
     var send_message_to_sw = function(msg){
     return new Promise(function(resolve, reject){
     // Create a Message Channel
     var msg_chan = new MessageChannel();

     // Handler for recieving message reply from service worker
     msg_chan.port1.onmessage = function(event){
     if(event.data.error){
     reject(event.data.error);
     }else{
     resolve(event.data);
     }
     };

     // Send message to service worker along with port for reply
     navigator.serviceWorker.controller.postMessage({data: msg}, [msg_chan.port2]);
     });
     };

     document.getElementById('test').addEventListener('click', function(){
     send_message_to_sw('test123').then(function(a){
     console.log(a);
     });
     })*/
}

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
    router: router
}).$mount('#app');