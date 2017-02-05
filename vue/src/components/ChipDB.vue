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
            chipdb: {}
        }
    },
    mounted: function() {
        this.fetchChipDB();
    },
    computed: {
        loaded: function() {
            for(var key in this.chipdb) {
                console.log("loaded");
                return true;
            }
            console.log("not loaded");
            return false;
        }
    },
    methods: {
        fetchChipDB: function() {
            this.$http.get(this.url).then(function(response) {
                this.$set(this, "chipdb", response.body);
            })
        },
        findChips: function(searchQuery) {
            var searchResult = {};
            for (var key in this.chipdb) {
                if (this.chipdb.hasOwnProperty(key)) {
                    var chip = this.chipdb[key];
                    if (this._stringContains(key, searchQuery)) {
                        searchResult[key] = chip;
                    }
                }
            }
            for (var key in this.chipdb) {
                if (this.chipdb.hasOwnProperty(key)) {
                    var chip = this.chipdb[key];
                    if (chip.aliases && this._stringContains(chip.aliases.join(", "), searchQuery)) {
                        searchResult[key] = chip;
                    }
                }
            }
            for (var key in this.chipdb) {
                if (this.chipdb.hasOwnProperty(key)) {
                    var chip = this.chipdb[key];
                    if (chip.description && this._stringContains(chip.description, searchQuery)) {
                        searchResult[key] = chip;
                    }
                }
            }
            return searchResult;
        },
        getChip: function(key) {
            return this.chipdb[key] ? this.chipdb[key] : null;
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
