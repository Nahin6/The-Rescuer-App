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
        .custom-map-control-button {
        background-color: rgba(255, 255, 255, 0.708);
        border: 0;
        border-radius: 2px;
        box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
        margin: 10px;
        padding: 0 0.5em;
        font: 400 18px Roboto, Arial, sans-serif;
        overflow: hidden;
        height: 40px;
        cursor: pointer;
        }
        .custom-map-control-button:hover {
        background: rgb(235, 235, 235);
        }
        #header{
          text-align: center;
          font-size: 50px;
        }
    </style>

  </head>

  <body>
    <h1 id="header">map</h1>
    <!--The div element for the map -->
   
    
    <div id="map"></div>
    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script type="text/javascript">
        function initMap() {
        const myLatLng = { lat: -25.363, lng: 131.044 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: myLatLng,
        });

        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
        });
       }

      window.initMap = initMap;
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsiSPDMZVYMdkPXe8PNMn4NVKd7TLGYdA&callback=initMap&solution_channel=GMP_guides_locatorplus_v2_a"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsiSPDMZVYMdkPXe8PNMn4NVKd7TLGYdA&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>