import Vue from 'vue'
import Vuex from 'vuex'

var chips = {};

exports.chipdb = new Vuex.Store({
    state: {
        loading: false,
        loaded: false,
        packages: {},
        version: null
    },
    mutations: {
        fetching: function(state) {
            state.loading = true;
        },
        fetched: function(state, data) {
            state.packages = data.packages;
            state.version = data.version;
            chips = data.chips;
            state.loading = false;
            state.loaded = true;
        }
    },
    actions: {
        fetch: function(obj) {
            obj.commit('fetching');
            Vue.http.get('/data/chipdb.json').then(function(response) {
                obj.commit('fetched', response.body);
            })
        }
    },
    getters: {
        findChips: function(state) {
            return function(searchQuery) {
                var searchResult = {};
                for (let key in chips) {
                    if (chips.hasOwnProperty(key)) {
                        let chip = chips[key];
                        if (window.stringContains(key, searchQuery)) {
                            searchResult[key] = chip;
                        }
                    }
                }
                for (let key in chips) {
                    if (chips.hasOwnProperty(key)) {
                        let chip = chips[key];
                        if (chip.aliases && window.stringContains(chip.aliases.join(", "), searchQuery)) {
                            searchResult[key] = chip;
                        }
                    }
                }
                for (let key in chips) {
                    if (chips.hasOwnProperty(key)) {
                        let chip = chips[key];
                        if (chip.description && window.stringContains(chip.description, searchQuery)) {
                            searchResult[key] = chip;
                        }
                    }
                }
                return searchResult;
            };
        },
        getChip: function(state) {
            return function(key) {
                return chips[key] ? chips[key] : null;
            }
        },
        getPackageType: function(state) {
            return function(p) {
                if(this.packages.hasOwnProperty(p)) {
                    return p;
                }
                for (var packageType in this.packages) {
                    if (this.packages.hasOwnProperty(packageType) && packageType.indexOf('_') != 0) {
                        var subPackages = this.packages[packageType];
                        if (window.stringContains(subPackages.join(","), p)) {
                            return packageType;
                        }
                    }
                }
                return null;
            }
        }
    }
});