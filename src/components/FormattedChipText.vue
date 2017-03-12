<template>
    <div v-html="html"></div>
</template>

<script>
export default {
    name: 'formatted-chip-text',
    props: {
        'text': {
            type: [String, Array],
            required: true
        },
        'allowTables': {
            type: Boolean,
            default: false
        },
        'nlToBr': {
            type: Boolean,
            default: false
        }
    },
    computed: {
        html: function(){
            var text = typeof(this.text) == typeof([]) ? this.text.join('\n') : this.text;
            var html = this.escapeHtml(text);
            var htmlUnderscore = this.escapeHtml('_');
            var htmlTilde = this.escapeHtml('~');
            var htmlLower = this.escapeHtml('<');
            var htmlHigher = this.escapeHtml('>');

            html = html.replace(new RegExp(htmlTilde+'([a-zA-Z0-9'+htmlUnderscore+']+)', 'g'), '<span class="neg">$1</span>');
            html = html.replace(new RegExp('([a-zA-Z0-9]+)'+htmlUnderscore+htmlUnderscore+'([a-zA-Z\(\)\+\-0-9]+)', 'g'), '$1<sub>$2</sub>');

            if (this.nlToBr) {
                html = html.replace(new RegExp(htmlLower+'br/?'+htmlHigher, 'g'), '\n');
                html = html.replace(new RegExp('((^|'+htmlHigher+')\s*)\n(\s*('+htmlLower+'|$))', 'g'), '$1$3');
                html = html.replace(new RegExp('\n', 'g'), '<br/>');
            }

            if (this.allowTables) {
                html = html.replace(new RegExp(htmlLower+'/?t(head|body|foot)'+htmlHigher, 'g'), '');
                html = html.replace(new RegExp(htmlLower+'(/?t(able|head|body|foot|r|h|d)(\s'+htmlHigher+'*)?)'+htmlHigher, 'g'), '<$1>');
            }
            return html;
        }
    },
    methods: {
        escapeHtml: function(text) {
            var div = document.createElement('div');
            div.appendChild(document.createTextNode(text));
            return div.innerHTML;
        }
    }
};
</script>

<style>
    .neg {
        border-top: 1px solid black;
    }
</style>