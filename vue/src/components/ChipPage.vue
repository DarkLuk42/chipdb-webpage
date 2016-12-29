<template>
    <div id="chippage">
        <h1 class="chipid">
            {{key}}
            <small v-if="chip.aliases && chip.aliases.length>0" class="aliases">
                (<template v-for="(alias, i) in chip.aliases"><span>{{alias}}</span>{{(chip.aliases.length-1>=i) ? '' : ', '}}</template>)
            </small>
        </h1>
        <h2 class="description"><formatted-chip-text :text="chip.description"></formatted-chip-text></h2>
        <a v-if="chip.datasheet" :href="chip.datasheet">PDF datasheet</a>
        <div class="pins">
            <h4>Pins</h4>
            <table class="table">
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
        <div>
            <h4>Packages</h4>
            <chip-package v-for="(pinMap, package) in chip.packages" :package=package :pin-map=pinMap></chip-package>
        </div>
        <div v-if="chip.specs" class="specifications">
            <h4>Specifications</h4>
            <small class="hint">(typical values under recommended operating conditions, unless specified)</small>
            <table class="table">
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
    <hr>
    <search></search>
</template>

<script>
export default {
    name: 'chippage',
    computed: {
        key (){
            return this.$route.params.chip
        },
        chip (){
            if (!this.key || !window.chipdb[this.key]) {
                // TODO FIX
                router.replace('/');
            }
            return window.chipdb[this.key]
        }
    }
}
</script>

<style>
    .table
    {
      border-collapse: collapse;
    }
    .table td
    {
      border: 1px solid black;
      padding: 3px;
      vertical-align: top;
    }
    .table th
    {
      border: 1px solid black;
      border-bottom: 3px solid black;
      padding: 3px;
    }

    .pins .diagram
    {
      border-collapse: collapse;
      margin: 0 auto;
    }
    .pins .diagram .leftpinsym
    {
      padding-right: 5px;
    }
    .pins .diagram .rightpinsym
    {
      padding-left: 5px;
    }
    .pins .diagram .leftpinsym,
    .pins .diagram .rightpinnum,
    .pins .diagram .righttoppinnum,
    .pins .diagram .rightbottompinnum
    {
      text-align: right;
    }
    .pins .diagram .rightpinsym,
    .pins .diagram .leftpinnum,
    .pins .diagram .lefttoppinnum,
    .pins .diagram .leftbottompinnum
    {
      text-align: left;
    }
    .pins .diagram .leftpinnum,
    .pins .diagram .rightpinnum
    {
      min-width: 50px;
      padding: 5px;
    }
    .pins .diagram .leftpinnum
    {
      border: 0;
      border-left: 1px solid black;
    }
    .pins .diagram .rightpinnum
    {
      border: 0;
      border-right: 1px solid black;
    }
    .pins .diagram .lefttoppinnum,
    .pins .diagram .righttoppinnum
    {
      border: 0;
      border-bottom: 1px solid black;
    }
    .pins .diagram .leftbottompinnum,
    .pins .diagram .rightbottompinnum
    {
      border: 0;
      border-top: 1px solid black;
    }
</style>
