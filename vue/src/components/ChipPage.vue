<template>
    <div id="chippage">
        {{chip.description}}
    </div>
</template>

<script>
export default {
    name: 'chippage',
    computed: {
        chip (){
            return window.chipdb[this.$route.params.chip]
        }
    }
}
</script>

<style>
</style>
