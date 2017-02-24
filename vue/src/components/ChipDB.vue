<template>
    <div v-if="loaded===false" class="preloader-wrapper active">
        <div class="spinner-layer spinner-red-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            url: '/data/chipdb.json',
            packages: {},
            version: '',
            chips: {}
        }
    },
    mounted: function() {
        this.fetchChipDB();
    },
    computed: {
        loaded: function() {
            for(var key in this.chips) {
                if (this.chips.hasOwnProperty(key)) {
                    return true;
                }
            }
            return false;
        }
    },
    methods: {
        fetchChipDB: function() {
            this.$http.get(this.url).then(function(response) {
                this.packages = response.body.packages;
                this.version = response.body.version;
                this.chips = response.body.chips;
            })
        },
        findChips: function(searchQuery) {
            var searchResult = {};
            for (var key in this.chips) {
                if (this.chips.hasOwnProperty(key)) {
                    var chip = this.chips[key];
                    if (this._stringContains(key, searchQuery)) {
                        searchResult[key] = chip;
                    }
                }
            }
            for (var key in this.chips) {
                if (this.chips.hasOwnProperty(key)) {
                    var chip = this.chips[key];
                    if (chip.aliases && this._stringContains(chip.aliases.join(", "), searchQuery)) {
                        searchResult[key] = chip;
                    }
                }
            }
            for (var key in this.chips) {
                if (this.chips.hasOwnProperty(key)) {
                    var chip = this.chips[key];
                    if (chip.description && this._stringContains(chip.description, searchQuery)) {
                        searchResult[key] = chip;
                    }
                }
            }
            return searchResult;
        },
        getChip: function(key) {
            return this.chips[key] ? this.chips[key] : null;
        },
        getPackageType: function(p) {
            for (var packageType in this.packages) {
                if (this.packages.hasOwnProperty(packageType) && packageType.indexOf('_') != 0) {
                    var subPackages = this.packages[packageType];
                    if (this._stringContains(subPackages.join(","), p)) {
                        return packageType;
                    }
                }
            }
            return null;
        },
        _stringContains: function(haystack, needle, caseSensitive) {
            caseSensitive = typeof(caseSensitive) == "undefined" ? false : !!caseSensitive;
            if(!caseSensitive) {
                haystack = haystack.toUpperCase();
                needle = needle.toUpperCase();
            }
            return haystack.indexOf(needle) != -1;
        }
    }
}
</script>

<style scoped>
</style>
