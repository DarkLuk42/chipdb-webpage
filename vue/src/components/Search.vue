<template>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">search</i>
            <input id="search_input" type="search" v-model="searchQuery">
            <label for="search_input">Name or description</label>
            <ul class="autocomplete-content dropdown-content">
                <li v-for="(chip, key) in chips"><router-link :to="'/chip/'+key"><strong>{{key}}</strong> {{chip.description}}</router-link></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
  name: 'search',
  data () {
      return {
        chipdb: window.chipdb,
        searchQuery: ''
      }
  },
  computed: {
      chips (){
          if (this.searchQuery.length >= 2) {
              var chips = window.chipdb.findChips(this.searchQuery);
              return chips;
          }
          return {};
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: block;
}
</style>
