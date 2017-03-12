import Vue from 'vue'
import Vuex from 'vuex'

var _chips = {};

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
            if(data !== null) {
                state.packages = data.packages;
                state.version = data.version;
                _chips = data.chips;
                state.loading = false;
                state.loaded = true;
            } else {
                state.packages = null;
                state.version = null;
                _chips = {};
                state.loading = false;
                state.loaded = false;
            }
        }
    },
    actions: {
        fetch: function(obj) {
            obj.commit('fetching');
            Vue.http.get('/data/chipdb.json').then(function(response) {
                obj.commit('fetched', response.body);
            }, function() {
                obj.commit('fetched', null);
            });
        }
    },
    getters: {
        findChips: function(state) {
            return function(searchQuery) {
                var searchResult = {};
                for (let key in _chips) {
                    if (_chips.hasOwnProperty(key)) {
                        let chip = _chips[key];
                        if (window.stringContains(key, searchQuery)) {
                            searchResult[key] = chip;
                        }
                    }
                }
                for (let key in _chips) {
                    if (_chips.hasOwnProperty(key)) {
                        let chip = _chips[key];
                        if (chip.aliases && window.stringContains(chip.aliases.join(", "), searchQuery)) {
                            searchResult[key] = chip;
                        }
                    }
                }
                for (let key in _chips) {
                    if (_chips.hasOwnProperty(key)) {
                        let chip = _chips[key];
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
                return _chips[key] ? _chips[key] : null;
            }
        },
        getPackageType: function(state) {
            return function(p) {
                if(state.packages.hasOwnProperty(p)) {
                    return p;
                }
                for (var packageType in state.packages) {
                    if (state.packages.hasOwnProperty(packageType) && packageType.indexOf('_') != 0) {
                        var subPackages = state.packages[packageType];
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