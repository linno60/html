var latlong = {};
latlong["AF"] = {"latitude": 33, "longitude": 65};
latlong["AL"] = {"latitude": 41, "longitude": 20};
latlong["AO"] = {"latitude": -12.5, "longitude": 18.5};
latlong["BR"] = {"latitude": -10, "longitude": -55};
latlong["CA"] = {"latitude": 54, "longitude": -100};
latlong["DZ"] = {"latitude": 28, "longitude": 3};
latlong["FI"] = {"latitude": 62, "longitude": 26};
latlong["SE"] = {"latitude": 62, "longitude": 15};
latlong["UA"] = {"latitude": 49, "longitude": 32};
latlong["US"] = {"latitude": 38, "longitude": -97};

var mapData = [
    {"code": "AF", "name": "Afghanistan", "value": 32, "color": "#eea638"},
    {"code": "AL", "name": "Albania", "value": 20, "color": "#d8854f"},
    {"code": "DZ", "name": "Algeria", "value": 16, "color": "#de4c4f"},
    {"code": "AO", "name": "Angola", "value": 8, "color": "#de4c4f"},
    {"code": "BR", "name": "Brazil", "value": 318, "color": "#86a965"},
    {"code": "CA", "name": "Canada", "value": 37, "color": "#a7a737"},
    {"code": "SE", "name": "Sweden", "value": 23, "color": "#d8854f"},
    {"code": "FI", "name": "Finland", "value": 8, "color": "#d8854f"},
    {"code": "UA", "name": "Ukraine", "value": 26, "color": "#d8854f"},
    {"code": "US", "name": "United States", "value": 80, "color": "#a7a737"}
];

// get min and max values
var minBulletSize = 10;
var maxBulletSize = 100;
var min = Infinity;
var max = -Infinity;
for (var i = 0; i < mapData.length; i++) {
    var value = mapData[ i ].value;
    if (value < min) {
        min = value;
    }
    if (value > max) {
        max = value;
    }
}

// it's better to use circle square to show difference between values, not a radius
var maxSquare = maxBulletSize * maxBulletSize * 2 * Math.PI;
var minSquare = minBulletSize * minBulletSize * 2 * Math.PI;

// create circle for each country
var images = [];
for (var i = 0; i < mapData.length; i++) {
    var dataItem = mapData[ i ];
    var value = dataItem.value;
    // calculate size of a bubble
    var square = (value - min) / (max - min) * (maxSquare - minSquare) + minSquare;
    if (square < minSquare) {
        square = minSquare;
    }
    var size = Math.sqrt(square / (Math.PI * 2));
    var id = dataItem.code;

    images.push({
        "type": "circle",
        "theme": "light",
        "width": size,
        "height": size,
        "color": dataItem.color,
        "alpha": 0.7,
        "longitude": latlong[ id ].longitude,
        "latitude": latlong[ id ].latitude,
        "title": dataItem.name,
        "value": value,
        "balloonText": "[[title]]: [[value]]"
    });
}

// build map
var map = AmCharts.makeChart("chartdiv", {
    "type": "map",
    "projection": "mercator",
    "areasSettings": {
        "unlistedAreasOutlineColor": "#ccc",
        "unlistedAreasColor": "#000000",
        "unlistedAreasAlpha": 0.1
    },
    "dataProvider": {
        "map": "worldLow",
        "images": images
    }
});
