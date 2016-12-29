<template>
    <div class="package">
        {{package}}

        <template v-if="mainType=='TYPE_SINGLE'">
            TODO
        </template>

        <template v-if="mainType=='TYPE_DOUBLE'">
            <svg viewBox="0 0 100 120" class="package-type-double">
                <rect x="0" y="0" width="100" height="120" fill="none" class="border"></rect>

                <rect :x="getChipPos().left" :y="getChipPos().top" :width="getChipPos().width" :height="getChipPos().height" stroke="black" stroke-width="1" fill="none" class="chip"></rect>
                <circle :cx="getChipPos().left+5" :cy="getChipPos().top+5" r=2 fill="black" class="alignment"></circle>

                <template v-for="num in pinCount">
                    <text :text-anchor="isPinLeft(num)?'start':'end'" :x="getPinX(num, -3)" :y="getPinY(num)+3" font-family="Arial" font-size="8">{{num}}</text>
                    <text :text-anchor="isPinLeft(num)?'end':'start'" :x="getPinX(num, 8)" :y="getPinY(num)+3" font-family="Arial" font-size="8">{{getPin(num)}}</text>
                    <line :x1="getPinX(num)" :y1="getPinY(num)" :x2="getPinX(num, 5)" :y2="getPinY(num)" stroke="black"></line>
                </template>
            </svg>
        </template>

        <template v-if="mainType=='TYPE_QUAD'">
            <svg viewBox="0 0 100 120" class="package-type-double">
                <rect x="0" y="0" width="100" height="120" fill="none" class="border"></rect>

                <rect :x="getChipPos().left" :y="getChipPos().top" :width="getChipPos().width" :height="getChipPos().height" stroke="black" stroke-width="1" fill="none" class="chip"></rect>
                <circle :cx="getChipPos().left+5" :cy="getChipPos().top+5" r=2 fill="black" class="alignment"></circle>

                <template v-for="num in pinCount">
                    <text :text-anchor="isPinLeft(num)?'start':'end'" :x="getPinX(num, -3)" :y="getPinY(num)+3" font-family="Arial" font-size="8">{{num}}</text>
                    <text :text-anchor="isPinLeft(num)?'end':'start'" :x="getPinX(num, 8)" :y="getPinY(num)+3" font-family="Arial" font-size="8">{{getPin(num)}}</text>
                    <line :x1="getPinX(num)" :y1="getPinY(num)" :x2="getPinX(num, 5)" :y2="getPinY(num)" stroke="black"></line>
                </template>
            </svg>
        </template>

        <template v-if="mainType=='TYPE_ARRAY'">
            TODO
        </template>

        <div v-if="extraPins.length>0" class="extra-pins">
            <h5>extra Pins</h5>
            <ul>
                <li v-for="extraPin in extraPins">{{extraPin}}: {{getPin(extraPin)}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'chip-package',
    props: {
        'package': {
            type: String,
            required: true
        },
        'pinMap': {
            type: Object,
            required: true
        }
    },
    computed: {
        mainType: function() {
            // TODO
            return this.package == 'QFN' ? 'TYPE_QUAD' : 'TYPE_DOUBLE';
        },
        extraPins: function() {
            var extraPins = [];
            switch(this.mainType) {
                case 'TYPE_SINGLE':
                case 'TYPE_DOUBLE':
                case 'TYPE_QUAD':
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(!num.match(new RegExp('^[0-9]+$'))) {
                                extraPins.push(num);
                            }
                        }
                    }
                    return extraPins;
                case 'TYPE_ARRAY':
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(!num.match(new RegExp('^[A-Z]+[0-9]+$'))) {
                                extraPins.push(num);
                            }
                        }
                    }
                    return extraPins;
                default:
                    return extraPins;
            }
        },
        pinCount: function() {
            switch(this.mainType) {
                case 'TYPE_SINGLE':
                    var length = 0;
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(num.match(new RegExp('^[0-9]+$'))) {
                                length = Math.max(length, parseInt(num));
                            }
                        }
                    }
                    return length;
                case 'TYPE_DOUBLE':
                    var length = 0;
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(num.match(new RegExp('^[0-9]+$'))) {
                                length = Math.max(length, parseInt(num));
                            }
                        }
                    }
                    return Math.ceil(length/2)*2;
                case 'TYPE_QUAD':
                    var length = 0;
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(num.match(new RegExp('^[0-9]+$'))) {
                                length = Math.max(length, parseInt(num));
                            }
                        }
                    }
                    return Math.ceil(length/4)*4;
                case 'TYPE_ARRAY':
                default:
                    return null;
            }
        }
    },
    methods: {
        getPin: function(num) {
            switch(this.mainType) {
                case 'TYPE_SINGLE':
                case 'TYPE_DOUBLE':
                case 'TYPE_QUAD':
                    if(this.pinMap.hasOwnProperty(num)) {
                        return this.pinMap[num];
                    }
                    return 'NC';
                case 'TYPE_ARRAY':
                    if(this.pinMap.hasOwnProperty(num)) {
                        return this.pinMap[num];
                    }
                    return 'NOT_PRESENT';
                default:
                    if(this.pinMap.hasOwnProperty(num)) {
                        return this.pinMap[num];
                    }
                    return null;
            }
        },
        getChipPos: function() {
            switch(this.mainType) {
                case 'TYPE_SINGLE':
                    return null;
                case 'TYPE_DOUBLE':
                    return {
                        left: 30,
                        top: 10,
                        width: 40,
                        height: 100
                    };
                case 'TYPE_QUAD':
                    return {
                        left: 30,
                        top: 30,
                        width: 40,
                        height: 40
                    };
                case 'TYPE_ARRAY':
                default:
                    return null;
            }
        },
        getPinX: function(num, offset) {
            if(typeof(offset) == 'undefined') {
                offset = 0;
            }

            switch(this.mainType) {
                case 'TYPE_SINGLE':
                    return null;
                case 'TYPE_DOUBLE':
                    return this.isPinLeft(num) ? this.getChipPos().left-offset : this.getChipPos().left+this.getChipPos().width+offset;
                case 'TYPE_QUAD':
                    if(this.isPinLeft(num)) {
                        return this.getChipPos().left-offset;
                    }else if(this.isPinBottom(num)) {
                        return this.getChipPos().left-offset;//TODO
                    }else if(this.isPinRight(num)) {
                        return this.getChipPos().left+this.getChipPos().width+offset;
                    }else{
                        return this.getChipPos().left+this.getChipPos().width+offset;//TODO
                    }
                case 'TYPE_ARRAY':
                default:
                    return null;
            }
        },
        getPinY: function(num, offset) {
            if(typeof(offset) == 'undefined') {
                offset = 0;
            }

            switch(this.mainType) {
                case 'TYPE_SINGLE':
                    return null;
                case 'TYPE_DOUBLE':
                    return this.getChipPos().top+(this.getChipPos().height / (this.pinCount/2) * (((num-1)%(this.pinCount/2))+0.5))+offset;
                case 'TYPE_QUAD':
                    if(this.isPinLeft(num)) {
                        return this.getChipPos().top-offset;//TODO
                    }else if(this.isPinBottom(num)) {
                        return this.getChipPos().top+this.getChipPos().height+offset;
                    }else if(this.isPinRight(num)) {
                        return this.getChipPos().top+this.getChipPos().height+offset;//TODO
                    }else{
                        return this.getChipPos().top-offset;
                    }
                case 'TYPE_ARRAY':
                default:
                    return null;
            }
        },
        isPinLeft: function(num) {
            switch(this.mainType) {
                case 'TYPE_SINGLE':
                    return false;
                case 'TYPE_DOUBLE':
                    return num-1 < this.pinCount/2;
                case 'TYPE_QUAD':
                    return num-1 < this.pinCount/4;
                case 'TYPE_ARRAY':
                default:
                    return false;
            }
        },
        isPinBottom: function(num) {
            switch(this.mainType) {
                case 'TYPE_SINGLE':
                    return true;
                case 'TYPE_DOUBLE':
                    return false;
                case 'TYPE_QUAD':
                    return num-1 < this.pinCount/2 && num-1 >= this.pinCount/4;
                case 'TYPE_ARRAY':
                default:
                    return false;
            }
        },
        isPinRight: function(num) {
            switch(this.mainType) {
                case 'TYPE_SINGLE':
                    return true;
                case 'TYPE_DOUBLE':
                    return num-1 >= this.pinCount/2;
                case 'TYPE_QUAD':
                    return num-1 >= this.pinCount/2 && num-1 < this.pinCount/4*3;
                case 'TYPE_ARRAY':
                default:
                    return false;
            }
        }
    }
};
</script>

<style>
    .package-type-double {
        width: 100%;
        max-width: 400px;
        height: auto;
    }
    .package svg .border{
        stroke: black;
        stroke-width: 1px;
    }
</style>