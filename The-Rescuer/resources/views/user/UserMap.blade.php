<html>
  <head>
    <title>Simple Markers</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- playground-hide -->
    <script>
      const process = { env: {} };
      process.env.GOOGLE_MAPS_API_KEY =
        "AIzaSyACsHOTMhc3TRj4H3MLT2LyYLNSxAvsq0M";
    </script>
    <!-- playground-hide-end -->

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="main.index.js"></script>
  </head>
  <body>
    <div id="map-view"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACsHOTMhc3TRj4H3MLT2LyYLNSxAvsq0M&callback=initMap&v=weekly"
      defer
    ></script>
    
    <script>
      function initMap() {
        const myLatLng = { lat: -25.363, lng: 131.044 };
        const map = new google.maps.Map(document.getElementById("map-view"), {
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
  </body>
</html>
