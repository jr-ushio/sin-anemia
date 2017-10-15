<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= $depth.'css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?= $depth.'css/bootstrap-theme.min.css' ?>">
  <link rel="stylesheet" href="<?= $depth.'css/style.css' ?>">
  <title>Document</title>

  <!-- <script src="js/leaflet-js"></script> -->
  <!-- <link rel="stylesheet" href="css/leaflet.css"> -->
  <!-- <script src="<?= $depth.'js/leaflet-src.js'; ?>" charset="utf-8"></script> -->
  <!-- <script src="<?= $depth.'js/country.js'; ?>" charset="utf-8"></script> -->

  <script src="<?= $depth.'js/jquery-2.2.4.min.js'; ?>" charset="utf-8"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>


  <script>

  $(function(){
    var countries = { "type": "FeatureCollection",
    "features": [
      { "type": "Feature",
        "geometry": {"type": "Point", "coordinates": [102.0, 0.5]},
        "properties": {"prop0": "value0"}
        },
      { "type": "Feature",
        "geometry": {
          "type": "LineString",
          "coordinates": [
            [102.0, 0.0], [103.0, 1.0], [104.0, 0.0], [105.0, 1.0]
            ]
          },
        "properties": {
          "prop0": "value0",
          "prop1": 0.0
          }
        },
      { "type": "Feature",
         "geometry": {
           "type": "Polygon",
           "coordinates": [
             [ [100.0, 0.0], [101.0, 0.0], [101.0, 1.0],
               [100.0, 1.0], [100.0, 0.0] ]
             ]
         },
         "properties": {
           "prop0": "value0",
           "prop1": {"this": "that"}
           }
         }
       ]
     };
    var map = L.map('map').
       setView([-9.189967, -75.015152],
       5);

    var greenIcon = L.icon({
          iconUrl: 'images/marker-icon.png',
          shadowUrl: 'images/leaf-shadow.png',

          iconSize:     [38, 95], // size of the icon
          shadowSize:   [50, 64], // size of the shadow
          iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
          shadowAnchor: [4, 62],  // the same for the shadow
          popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
      });

      var markers = [];

      var IronMarker = L.Marker.extend({
         options: {
            data: 'Custom data!'
         }
      });


      var marker = new IronMarker([-16.409047, -71.537451], {
        icon: greenIcon,
        data : {
          departamento : "Arequipa"
        }

      }).addTo(map);
      var marker2 = new IronMarker([-15.840222, -70.021881], {
        icon: greenIcon,
        data : {
          departamento : "Puno"
        }
      }).addTo(map);
      var marker3 = new IronMarker([-13.531950, -71.967463], {
        icon: greenIcon,
        data : {
          departamento : "Cusco"
        }
      }).addTo(map);

      markers.push(marker);
      markers.push(marker2);
      markers.push(marker3);

      // setTimeout(function(){
      //   map.invalidateSize();
      // }, 5000);

      var LeafIcon = L.Icon.extend({
        options: {
            shadowUrl: 'images/leaf-shadow.png',
            iconSize:     [38, 95],
            shadowSize:   [50, 64],
            iconAnchor:   [22, 94],
            shadowAnchor: [4, 62],
            popupAnchor:  [-3, -76]
        }
      });


      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
          attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
          maxZoom: 18,
          id: 'mapbox.streets',
          accessToken: 'pk.eyJ1IjoidXNoaW8iLCJhIjoiY2o4czJ0ZWI4MDRsYjJ3bzJxN2Yyb3c3NyJ9.yvO4LkK0RH9rb3fczZpwTg'
      }).addTo(map);

      markers.forEach(function(marker){
        marker.on("click", function(e){
          //window.location.href = "https://elcomercio.pe/";

          console.log("MARKER:", marker);

        });

        marker.on("mouseover", function(e){
          marker.bindPopup("<h3>" + marker.options.data.departamento + "</h3>");
          marker.openPopup();
        })

      });

      $('#myTabs li:eq(1)').on('click', 'a', function(event) {
        event.preventDefault();
        map.invalidateSize();
      });

  });
  </script>

</head>
<body>
