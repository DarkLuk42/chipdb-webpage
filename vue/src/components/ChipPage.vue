<template>
    <div id="chippage" v-if="chip">
        <h1 class="chipid">
            {{key}}
            <small v-if="chip.aliases && chip.aliases.length>0" class="aliases">
                (<template v-for="(alias, i) in chip.aliases"><span>{{alias}}</span>{{(chip.aliases.length-1<=i) ? '' : ', '}}</template>)
            </small>
        </h1>
        <h2 class="description"><formatted-chip-text :text="chip.description"></formatted-chip-text></h2>
        <a v-if="chip.datasheet" :href="chip.datasheet" target="_blank">PDF datasheet</a>
        <section>
            <div class="card">
                <div class="card-content">
                    <h4>Packages</h4>
                </div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li v-for="(packages, packageType) in groupedPackages" :class="{tab: true, active: activePackage == packages[0]}">
                            <a>
                                <template v-for="(package, i) in packages">{{(i>0?', ':'')}}<span @click="selectPackage(package)" v-text="package"></span></template>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-content teal">
                    <div v-if="activePackage && chip.packages[activePackage]" >
                        <chip-package :package=activePackage :pin-map=chip.packages[activePackage]></chip-package>
                    </div>
                </div>
            </div>
        </section>
        <div class="pins">
            <h4>Pins</h4>
            <table class="bordered responsive-table">
                <thead>
                    <tr>
                        <th>Symbol</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(pin, sym) in chip.pins">
                        <td><formatted-chip-text :text="sym"></formatted-chip-text></td>
                        <td><formatted-chip-text :text="pin.desc"></formatted-chip-text></td>
                    </tr>
                </tbody>
            </table>
        <div>
        <div v-if="chip.specs" class="specifications">
            <h4>Specifications</h4>
            <small class="hint">(typical values under recommended operating conditions, unless specified)</small>
            <table class="bordered responsive-table">
                <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Value</th>
                    <th>Unit</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="spec in chip.specs">
                    <td><formatted-chip-text :text="spec.param"></formatted-chip-text></td>
                    <td><formatted-chip-text :text="spec.val" :nlToBr.once="true"></formatted-chip-text></td>
                    <td><formatted-chip-text v-if="spec.unit" :text="spec.unit"></formatted-chip-text></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div v-if="chip.notes" class="notes">
            <h4>Notes</h4>
            <ul>
                <li v-for="note in chip.notes">
                    <formatted-chip-text :text="note" :nlToBr.once="true" :allowTables.once="true"></formatted-chip-text>
                </li>
            <ul>
        </div>
        <small class="hint">
            <strong>Note:</strong>
            Data is maintained by an independent source and accuracy is not guaranteed.
            Check with the manufacturer's datasheet for up-to-date information.
        </small>
    </div>

    <search></search>
</template>

<script>
export default {
    name: 'chip-page',
    data: function() {
        return {
            activePackage: null
        };
    },
    mounted: function() {
        this.activePackage = this._getFirstPackage();
    },
    computed: {
        key (){
            return this.$route.params.chip
        },
        chip (){
            var chip = window.chipdb.getChip(this.key);
            if (!chip) {
                //router.replace('/');
            }
            return chip;
        },
        groupedPackages (){
            var groupedPackages = {};
            for(var p in this.chip.packages) {
                if(this.chip.packages.hasOwnProperty(p)) {
                    var mainPackage = window.chipdb.getPackageType(p);
                    if(!groupedPackages.hasOwnProperty(mainPackage)) {
                        groupedPackages[mainPackage] = [];
                    }
                    groupedPackages[mainPackage].push(p);
                }
            }
            return groupedPackages;
        }
    },
    watch: {
        chip: function(chip) {
            for(var p in chip.packages) {
                this.selectPackage(p);
                break;
            }
        }
    },
    methods: {
        selectPackage: function(p) {
            this.activePackage = p;
        },
        _getFirstPackage: function(p) {
            if(this.chip) {
                for(var p in this.chip.packages) {
                    if(this.chip.packages.hasOwnProperty(p)) {
                        return p;
                    }
                }
            }
            return null;
        }
    }
}
</script>

<style>
</style>
