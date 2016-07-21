var osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osmAttrib='Map data © <a href="http://osm.org/copyright">OpenStreetMap</a> contributors';
var osm = new L.TileLayer(osmUrl, {
    attribution: osmAttrib,
    detectRetina: true
});

var token = 'pk.eyJ1IjoiZG9tb3JpdHoiLCJhIjoieENoTEhXUSJ9.kjCosRk1pmnOqTvfsjmgIg';
var mapboxUrl = 'https://api.tiles.mapbox.com/v4/mapbox.streets/{z}/{x}/{y}@2x.png?access_token=' + token;
var mapboxAttrib = 'Map data © <a href="http://osm.org/copyright">OpenStreetMap</a> contributors. Tiles from <a href="https://www.mapbox.com">Mapbox</a>.';
var mapbox = new L.TileLayer(mapboxUrl, {
  attribution: mapboxAttrib
});

var map = new L.Map('map', {
    layers: [mapbox],
    center: [-2.50,117.90],
    zoom: 5,
    zoomControl: true
});


// Menambahkan kontrol lokasi untuk ruang nama global untuk pengujian hanya
// Di situs produksi, menghilangkan " lc = " !
lc = L.control.locate({
    strings: {
        title: "share location"
    }
}).addTo(map);
