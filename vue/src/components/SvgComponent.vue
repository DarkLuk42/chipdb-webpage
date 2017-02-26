<script>
export default {
    name: 'svg-component',
    props: {
        'render': {
            type: Function,
            required: true
        },
        'obj': {
            type: Object,
            required: true
        }
    },
    data: function() {
        return {
            width: 100,
            height: 50,
            defaultColor: null,
            defaultStokeWidth: null,
            defaultFontSize: null,
            objects: []
        };
    },
    mounted: function() {
        this.refresh();
    },
    watch: {
        render: function() {
            this.refresh();
        }
    },
    methods: {
        refresh: function() {
            this.clear();
            this.render.apply(this, [this.obj]);
        },
        clear: function() {
            this.width = 100;
            this.height = 50;
            this.defaultColor = 'black';
            this.defaultStokeWidth = 1;
            this.defaultFontSize = 12;
            this.objects = [];
        },
        strPad: function(str, size, left, padding) {
            str = ''+str;
            while(str.length < size && padding.length > 0) {
                str = left ? (padding+str) : (str+padding);
            }
            return str;
        },
        polarToCartesian: function(centerX, centerY, radius, angleInDegrees) {
            var angleInRadians = (angleInDegrees-90) * Math.PI / 180.0;

            return {
                x: centerX + (radius * Math.cos(angleInRadians)),
                y: centerY + (radius * Math.sin(angleInRadians))
            };
        },
        drawArc: function(x, y, radius, startAngle, endAngle, options) {
            options = options || {};
            var start = this.polarToCartesian(x, y, radius, endAngle);
            var end = this.polarToCartesian(x, y, radius, startAngle);

            var largeArcFlag = endAngle - startAngle <= 180 ? "0" : "1";

            var d = [
                "M", start.x, start.y,
                "A", radius, radius, 0, largeArcFlag, 0, end.x, end.y
            ].join(" ");

            this.objects.push({
                element: 'path',
                attributes: {
                    d: d,
                    stroke: options.color || this.defaultColor,
                    'stroke-width': options.strokeWidth || this.defaultStokeWidth,
                    fill: 'transparent'
                }
            });
        },
        drawLine: function(x1, y1, x2, y2, options) {
            options = options || {};
            this.objects.push({
                element: 'line',
                attributes: {
                    x1: x1,
                    y1: y1,
                    x2: x2,
                    y2: y2,
                    stroke: options.color || this.defaultColor,
                    'stroke-width': options.strokeWidth || this.defaultStokeWidth
                }
            });
        },
        drawCircle: function(cx, cy, r, options) {
            options = options || {};
            this.objects.push({
                element: 'circle',
                attributes: {
                    cx: cx,
                    cy: cy,
                    r: r,
                    fill: options.filled !== true ? 'transparent' : (options.color || this.defaultColor),
                    stroke: options.filled === true ? null : (options.color || this.defaultColor),
                    'stroke-width': options.filled === true ? null : options.strokeWidth || this.defaultStokeWidth
                }
            });
        },
        drawPolygon: function(points, options) {
            options = options || {};
            var points_str = points.map(function(p){return p.join(",");}).join(" ");

            this.objects.push({
                element: 'polygon',
                attributes: {
                    points: points_str,
                    fill: options.filled !== true ? 'transparent' : (options.color || this.defaultColor),
                    stroke: options.filled === true ? null : (options.color || this.defaultColor),
                    'stroke-width': options.filled === true ? null : options.strokeWidth || this.defaultStokeWidth
                }
            });
        },
        drawText: function(x, y, text, options) {
            options = options || {};
            var fontSize = options.fontSize || this.defaultFontSize;
            var fixFactor = 0.75;
            var transform = "";

            if(options.rotation) {
                transform += 'rotate('+options.rotation+' '+x+' '+y+') ';
            }

            if(options.vanchor == 'top') {
                y += fontSize*fixFactor;
            } else if(options.vanchor == 'middle') {
                y += fontSize*fixFactor/2;
            }

            this.objects.push({
                element: 'text',
                attributes: {
                    x: x,
                    y: y,
                    fill: options.color || this.defaultColor,
                    'text-anchor': options.anchor || 'start',
                    'font-size': fontSize,
                    'line-height': 1,
                    transform: transform || null
                },
                children: [
                    {
                        text: text
                    }
                ]
            });
        },
        drawRect: function(x, y, width, height, options) {
            options = options || {};
            this.objects.push({
                element: 'rect',
                attributes: {
                    x: x,
                    y: y,
                    width: width,
                    height: height,
                    fill: options.filled !== true ? 'transparent' : (options.color || this.defaultColor),
                    stroke: options.filled === true ? null : (options.color || this.defaultColor),
                    'stroke-width': options.filled === true ? null : options.strokeWidth || this.defaultStokeWidth
                }
            });
        }
    },
    render: function(createElement) {
        var children = [];
        for(var i = 0; i < this.objects.length; i++) {
            var object = this.objects[i];
            children.push(createElement(
                object.element,
                {
                    attrs: object.attributes
                },
                object.children || []
            ));
        }
        return createElement(
            'svg',
            {
                attrs: {
                    viewBox: '0 0 '+this.width+' '+this.height
                }
            },
            children
        );
    }
}
</script>

<style>
    svg {
        max-height: 640px;
        background: white;
    }
    svg text {
        white-space: pre;
        font-family: MONOSPACE;
    }
</style>