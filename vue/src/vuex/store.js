import Vue from 'vue'
import Vuex from 'vuex'

exports.default = new Vuex.Store({
    state: {
        count: 0
    },
    mutations: {
        increment: function(state) {
            state.count++
        }
    }
});