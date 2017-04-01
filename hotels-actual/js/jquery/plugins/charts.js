var chart = AmCharts.makeChart("chart", {
    "type": "serial",
    "theme": "light",
    "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 30,
    "dataDateFormat": "YYYY-MM-DD",
    "valueAxes": [{
            "id": "v1",
            "axisAlpha": 0,
            "position": "left",
            "ignoreAxisWidth": true
        }],
    "balloon": {
        "borderThickness": 0,
        "shadowAlpha": 0
    },
    "graphs": [{
            "id": "g1",
            "balloon": {
                "drop": true,
                "adjustBorderColor": false,
                "color": "#ffffff"
            },
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "lightblue",
            "bulletSize": 10,
            "hideBulletsCount": 50,
            "lineThickness": 2,
            "useLineColorForBulletBorder": true,
            "valueField": "value",
            "balloonText": "<span style='font-size:18px;'>[[value]] %</span>"
        }],
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "dataProvider": [{
            "date": "2012-08-02",
            "value": 0
        }, {
            "date": "2012-08-03",
            "value": 0
        }, {
            "date": "2012-08-04",
            "value": 0
        }, {
            "date": "2012-08-05",
            "value": 0
        }, {
            "date": "2012-08-06",
            "value": 0
        }, {
            "date": "2012-08-07",
            "value": 0
        }, {
            "date": "2012-08-08",
            "value": 0
        }, {
            "date": "2012-08-09",
            "value": 0
        }, {
            "date": "2012-08-10",
            "value": 0
        }, {
            "date": "2012-08-11",
            "value": 0
        }, {
            "date": "2012-08-12",
            "value": 0
        }, {
            "date": "2012-08-13",
            "value": 0
        }, {
            "date": "2012-08-14",
            "value": 0
        }, {
            "date": "2012-08-15",
            "value": 0
        }]
});
chart.addListener("rendered", zoomChart);
zoomChart();
function zoomChart() {
    chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
}