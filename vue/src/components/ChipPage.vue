<template>
    <div id="chippage">
        <h1>
            {{key}}
            <small v-if="chip.aliases">
                (<span v-for="alias in chip.aliases">{{alias}}</span>, )
            </small>
        </h1>
        <h2>{{chip.description}}</h2>
        <a v-if="chip.datasheet" href="chip.datasheet">PDF datasheet</a>
        <table class="pindiagram">
            <tbody>
                <tr>
                    <td class="leftpinsym">&nbsp;</td><td class="lefttoppinnum">&nbsp;</td>
                    <td class="righttoppinnum">&nbsp;</td><td class="rightpinsym">&nbsp;</td>
                </tr>
                <tr>
                    <td class="leftpinsym">D7</td><td class="leftpinnum">1&nbsp;•</td>
                    <td class="rightpinnum">24</td><td class="rightpinsym">Vcc</td>
                </tr>
            </tbody>
        </table>
        <table class="pintable">
            <thead>
                <tr>
                    <th>Pin</th>
                    <th>Symbol</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="pin in chip.pins">
                    <td>{{pin.num}}</td>
                    <td><formated-chip-text :text=pin.sym></formated-chip-text></td>
                    <td>{{pin.desc}}</td>
                </tr>
            </tbody>
        </table>
        <pre>{{chip}}</pre>
    </div>
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
                router.replace('/');
            }
            return window.chipdb[this.key]
        }
    }
}
</script>

<style>
    .pintable, .specstable
    {
      border-collapse: collapse;
    }
    .pintable td, .specstable td
    {
      border: 1px solid black;
      padding: 3px;
      vertical-align: top;
    }
    .pintable th, .specstable th
    {
      border: 1px solid black;
      border-bottom: 3px solid black;
      padding: 3px;
    }

    .pindiagram
    {
      border-collapse: collapse;
      margin: 0 auto;
    }
    .leftpinsym
    {
      padding-right: 5px;
    }
    .rightpinsym
    {
      padding-left: 5px;
    }
    .leftpinsym, .rightpinnum, .righttoppinnum, .rightbottompinnum
    {
      text-align: right;
    }
    .rightpinsym, .leftpinnum, .lefttoppinnum, leftbottompinnum
    {
      text-align: left;
    }
    .leftpinnum, .rightpinnum
    {
      min-width: 50px;
      padding: 5px;
    }
    .leftpinnum
    {
      border: 0;
      border-left: 1px solid black;
    }
    .rightpinnum
    {
      border: 0;
      border-right: 1px solid black;
    }
    .lefttoppinnum, .righttoppinnum
    {
      border: 0;
      border-bottom: 1px solid black;
    }
    .leftbottompinnum, .rightbottompinnum
    {
      border: 0;
      border-top: 1px solid black;
    }
</style>
