@extends('layouts.map')

@section('script')

<script>
  
  

  var url = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZGlnaXRhbC1oYXJyaXNidXJnIiwiYSI6ImNqZjFmbWowNDAwMHgycG1tZGY1bXRsbTUifQ.RU24ym1_0yk2O9agwMrOIQ';
  var attr = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>';
  
//   var streets = L.tileLayer(url, {id: 'mapbox.streets', attribution: attr});
//   var light = L.tileLayer(url, {id: 'mapbox.light', attribution: attr});
//   var dark = L.tileLayer(url, {id: 'mapbox.dark', attribution: attr});
//   var satellite = L.tileLayer(url, {id: 'mapbox.streets-satellite', attribution: attr});
//   var wheat = L.tileLayer(url, {id: 'mapbox.wheatpaste', attribution: attr});
//   var comic = L.tileLayer(url, {id: 'mapbox.comic', attribution: attr});
//   var pirates = L.tileLayer(url, {id: 'mapbox.pirates', attribution: attr});
  
  
  
  var @if($map->layer == 'streets-satellite') satellite @elseif($map->layer == 'high-contrast') contrast @else {{$map->layer}} @endif = L.tileLayer(url, {id: 'mapbox.{{$map->layer}}', attribution: attr});
  
//   var littleton = L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.'),
//     denver    = L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.'),
//     aurora    = L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.'),
//     golden    = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.');
  
  m = [];
  c = [];
  p = [];
  
  @foreach($markers as $marker)
    @if($marker->type == 'Marker')
      var str = Math.random().toString(36).substring(0,5);
      str = L.marker([{{$marker->latitude}}, {{$marker->longitude}}]).bindPopup('{{$marker->content}}');
      m.push(str);
    @elseif($marker->type == 'Circle')
      var str = Math.random().toString(36).substring(0,5);
      str = L.circle([{{$marker->latitude}}, {{$marker->longitude}}], {radius: {{$marker->radius}}, color: "{{$marker->color}}"}).bindPopup('{{$marker->content}}');
      c.push(str);
    @endif
  @endforeach
  
  @foreach($polygons as $polygon)
    var str = Math.random().toString(36).substring(0,5);
    str = L.polygon([
      [{{$polygon->latitude}}, {{$polygon->longitude}}],
    ]);
    p.push(str);
  @endforeach
  
  
  
  var markers = L.layerGroup(m);
  var circles = L.layerGroup(c);
  var polygons = L.layerGroup(p);
  
  var map = L.map('map', {
    center: [{{$map->latitude}}, {{$map->longitude}}],
    zoom: {{$map->zoom}},
    layers: [@if($map->layer == 'streets-satellite') satellite @elseif($map->layer == 'high-contrast') contrast @else {{$map->layer}} @endif, markers, circles, polygons]
  });
  
  var baseMaps = {
    "@if($map->layer == 'streets-satellite') satellite @elseif($map->layer == 'high-contrast') contrast @else {{$map->layer}} @endif": @if($map->layer == 'streets-satellite') satellite @elseif($map->layer == 'high-contrast') contrast @else {{$map->layer}} @endif
  };
  
  var overlayMaps = {
    "Markers": markers,
    "Circles": circles,
    "Polygons": polygons
  };
  
  L.control.layers(baseMaps, overlayMaps).addTo(map);
  
  var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}

map.on('click', onMapClick);

</script>

@endsection