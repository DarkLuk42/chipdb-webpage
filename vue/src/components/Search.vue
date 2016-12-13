<template>
    <div class="search">
        <h1 v-text="searchQuery"></h1>
        <input type="search" v-model="searchQuery"/>
        <ul>
            <li v-for="(chip, key) in chips"><router-link :to="'/chip/'+key">{{chip.description}}</router-link></li>
        </ul>
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
          var chips = {};
          if (this.searchQuery.length >= 2) {
              for (var key in this.chipdb) {
                  if (this.chipdb.hasOwnProperty(key)) {
                      var chip = this.chipdb[key];
                      if (key.toUpperCase().indexOf(this.searchQuery.toUpperCase()) != -1) {
                          chips[key] = chip;
                      }
                  }
              }
          }
          return chips;
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
