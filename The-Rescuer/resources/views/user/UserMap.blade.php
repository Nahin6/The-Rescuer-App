<html>
  <head>
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
    <style>
        #map {
        height: 650px;
        /* The height is 400 pixels */
        width: 70%;
        /* The width is the width of the web page */
        margin-left: 250px;
        }
        #header{
          text-align: center;
          font-size: 50px;
        }
    </style>

  </head>

  <body>
    <h1 id="header">Your Current location</h1>
    <!--The div element for the map -->
   
    
    <div id="map"></div>
    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script>
      function initMap() {
          // The location of Uluru
          const uluru = { lat:23.8103, lng: 90.4125 };
          // The map, centered at Uluru
          const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 20,
              center: uluru,
          });
          // The marker, positioned at Uluru
          const marker = new google.maps.Marker({
              position: uluru,
              map: map,
          });
        }

        window.initMap = initMap;
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsiSPDMZVYMdkPXe8PNMn4NVKd7TLGYdA&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>