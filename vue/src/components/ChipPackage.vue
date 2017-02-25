<template>
    <div>
        <svg-component :render=render :obj=this>
    </div>
</template>

<script>
export default {
    name: 'chip-package',
    props: {
        package: {
            type: String,
            required: true
        },
        pinMap: {
            type: Object,
            required: true
        }
    },
    watch: {
        pinMap: function() {
            this.$children[0].refresh();
        }
    },
    computed: {
        render: function() {
            switch(this.mainType) {
                case 'DIP':
                    return this.renderDip;
                case 'Q':
                    return this.renderQ;
                case 'SIP':
                case 'ARRAY':
                default:
                    return function(chipPackage) {
                        this.defaultColor = Math.random() < 0.5 ? 'red' : 'green';
                        this.drawCircle(50, 25, 12.5);
                    };
            }
        },
        renderDip: function() {
            return function(chipPackage) {
                this.defaultStokeWidth = 0.01; // inches
                this.defaultFontSize = 0.05; // inches
                var pinsHalf = chipPackage.pinCount/2;

                var spacingTop = 0.2;
                var spacingLeft = 0.8;
                var chipWidth = 3*0.1;
                var chipHeight = (pinsHalf-1)*0.1;
                var chipWidthExtra = -0.033*2;
                var chipHeightExtra = 0.033*2;
                var textSpacing = 0.015;

                this.width = chipWidth+2*spacingLeft; // inches
                this.height = chipHeight+2*spacingTop; // inches

                /*for(var x = 0; x <= this.width; x+=0.1) {
                    for(var y = 0; y <= this.height; y+=0.1) {
                        this.drawCircle(x, y, 0.005, 'red');
                    }
                }*/

                this.drawRect(spacingLeft-chipWidthExtra/2, spacingTop-chipHeightExtra/2, chipWidth+chipWidthExtra, chipHeight+chipHeightExtra);
                this.drawArc(spacingLeft+chipWidth/2, spacingTop-chipHeightExtra/2, 0.075/2, 90, 270);

                for(var p = 0; p < chipPackage.pinCount; p++) {
                    var pin = chipPackage.getPin(p+1);
                    var pinX1 = spacingLeft+(p >= pinsHalf ? chipWidth : 0);
                    var pinX2 = pinX1 + (p >= pinsHalf ? chipWidthExtra/2 : -chipWidthExtra/2);
                    var pinY1 = spacingTop + (p >= pinsHalf ? pinsHalf-1-(p%pinsHalf) : (p%pinsHalf))*0.1;
                    var pinY2 = pinY1;

                    this.drawLine(pinX1, pinY1, pinX2, pinY2);
                    this.drawCircle(pinX1, pinY1, 0.005);

                    var pinNumber = this.strPad(p+1, Math.log10(chipPackage.pinCount), true, ' ');
                    this.drawText(pinX2+(p >= pinsHalf ? -textSpacing : textSpacing), pinY1, pinNumber, {
                        anchor: (p < pinsHalf ? 'start' : 'end'),
                        vanchor: 'middle',
                        fontSize: this.defaultFontSize*0.75
                    });

                    this.drawText(pinX1+(p >= pinsHalf ? textSpacing : -textSpacing), pinY1, pin, {
                        anchor: (p >= pinsHalf ? 'start' : 'end'),
                        vanchor: 'middle'
                    });
                }
            };
        },
        renderQ: function() {
            return function(chipPackage) {
                this.defaultStokeWidth = 0.01; // inches
                this.defaultFontSize = 0.05; // inches
                var pinsHalf = chipPackage.pinCount/2;
                var pinsFourth = chipPackage.pinCount/4;

                var spacingTop = 0.85;
                var spacingLeft = 0.85;
                var chipWidth = (pinsFourth+2)*0.1;
                var chipHeight = (pinsFourth+2)*0.1;
                var chipWidthExtra = -0.05*2;
                var chipHeightExtra = -0.05*2;
                var textSpacing = 0.015;

                this.width = chipWidth+2*spacingLeft; // inches
                this.height = chipHeight+2*spacingTop; // inches

                /*for(var x = 0; x <= this.width; x+=0.1) {
                    for(var y = 0; y <= this.height; y+=0.1) {
                        this.drawCircle(x, y, 0.005, 'red');
                    }
                }*/

                this.drawRect(spacingLeft-chipWidthExtra/2, spacingTop-chipHeightExtra/2, chipWidth+chipWidthExtra, chipHeight+chipHeightExtra);
                var dotRadian = 0.05/2;
                this.drawCircle(spacingLeft-chipWidthExtra/2+dotRadian+textSpacing, spacingTop-chipHeightExtra/2+dotRadian+textSpacing, dotRadian);

                for(var p = 0; p < chipPackage.pinCount; p++) {
                    var pin = chipPackage.getPin(p+1);
                    var pinX1, pinY1, pinX2, pinY2, anchor, vanchor;
                    if(p < pinsFourth) {
                        pinX1 = spacingLeft;
                        pinY1 = spacingTop + (1.5 + p%pinsFourth)*0.1;
                        pinX2 = spacingLeft - chipWidthExtra/2;
                        pinY2 = pinY1;
                        anchor = 'start';
                        vanchor = 'middle';
                    } else if(p < pinsHalf) {
                        pinX1 = spacingLeft + (1.5 + p%pinsFourth)*0.1;
                        pinY1 = spacingTop + chipHeight;
                        pinX2 = pinX1;
                        pinY2 = spacingTop + chipHeight + chipHeightExtra/2;
                        anchor = 'middle';
                        vanchor = 'bottom';
                    } else if(p%pinsHalf < pinsFourth) {
                        pinX1 = spacingLeft + chipWidth;
                        pinY1 = spacingTop + chipHeight - (1.5 + p%pinsFourth)*0.1;
                        pinX2 = spacingLeft + chipWidth + chipWidthExtra/2;
                        pinY2 = pinY1;
                        anchor = 'end';
                        vanchor = 'middle';
                    } else {
                        pinX1 = spacingLeft + chipWidth - (1.5 + p%pinsFourth)*0.1;
                        pinY1 = spacingTop;
                        pinX2 = pinX1;
                        pinY2 = spacingTop - chipHeightExtra/2;
                        anchor = 'middle';
                        vanchor = 'top';
                    }

                    this.drawLine(pinX1, pinY1, pinX2, pinY2);
                    this.drawCircle(pinX1, pinY1, 0.005);

                    var pinNumber = p+1;
                    if(p%pinsHalf < pinsFourth) {
                        var currSideMaxPin = Math.ceil((p+1)/pinsFourth)*4;
                        pinNumber = this.strPad(p+1, Math.ceil(Math.log10(currSideMaxPin)), true, ' ');
                    }
                    this.drawText(
                        pinX2+((p%pinsHalf < pinsFourth) ? (p >= pinsHalf ? -textSpacing : textSpacing) : 0),
                        pinY2+((p%pinsHalf >= pinsFourth) ? (p < pinsHalf ? -textSpacing : textSpacing) : 0),
                        pinNumber,
                        {
                            anchor: anchor,
                            vanchor: vanchor,
                            fontSize: this.defaultFontSize*0.75
                        }
                    );

                    this.drawText(
                        pinX1-((p%pinsHalf < pinsFourth) ? (p >= pinsHalf ? -textSpacing : textSpacing) : 0),
                        pinY1-((p%pinsHalf >= pinsFourth) ? (p < pinsHalf ? -textSpacing : textSpacing) : 0),
                        pin,
                        {
                            anchor: (p >= pinsHalf ? 'start' : 'end'),
                            vanchor: 'middle',
                            rotation: (p%pinsHalf >= pinsFourth) ? -90 : null
                        }
                    );
                }
            };
        },
        mainType: function() {
            return window.chipdb.getPackageType(this.package);
        },
        extraPins: function() {
            var extraPins = [];
            switch(this.mainType) {
                case 'SIP':
                case 'DIP':
                case 'Q':
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(!num.match(new RegExp('^[0-9]+$'))) {
                                extraPins.push(num);
                            }
                        }
                    }
                    return extraPins;
                case 'ARRAY':
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
                case 'SIP':
                    var length = 0;
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(num.match(new RegExp('^[0-9]+$'))) {
                                length = Math.max(length, parseInt(num));
                            }
                        }
                    }
                    return length;
                case 'DIP':
                    var length = 0;
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(num.match(new RegExp('^[0-9]+$'))) {
                                length = Math.max(length, parseInt(num));
                            }
                        }
                    }
                    return Math.ceil(length/2)*2;
                case 'Q':
                    var length = 0;
                    for(var num in this.pinMap) {
                        if(this.pinMap.hasOwnProperty(num)) {
                            if(num.match(new RegExp('^[0-9]+$'))) {
                                length = Math.max(length, parseInt(num));
                            }
                        }
                    }
                    return Math.ceil(length/4)*4;
                case 'ARRAY':
                default:
                    return null;
            }
        }
    },
    methods: {
        getPin: function(num) {
            switch(this.mainType) {
                case 'SIP':
                case 'DIP':
                case 'Q':
                    if(this.pinMap.hasOwnProperty(num)) {
                        return this.pinMap[num];
                    }
                    return 'NC';
                case 'ARRAY':
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