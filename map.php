<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harita Kullanımı</title>
  
  <!-- Önce leaflet.css, sonra leaflet.js olmalı -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

  <style>
    #map {
      width: 600px;
      height: 400px;
    }
  </style>

</head>
<body>
  <div class="container">
    <div class="row">
   <div class="d-flex justify-content-end ">
  <div id='map' class="mt-3" style="width: 500px; height: 300px;"></div>
  </div>  
</div>
  </div>

  <script>
    var konumlar = [
      ["Home",   38.46807005874177, 27.112961823994738],
      ["Office",   38.36604075044565, 27.20684196008911],
      ["Main School",       38.37219590080224, 27.209604610389015],
      ["School", 39.62219685236067, 29.902979870600785]
    ];

    var map = L.map('map');

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    
    var isaretciler = [];
    for (var i = 0; i < konumlar.length; i++) {
        let KonumAdi = konumlar[i][0];
        let Enlem    = konumlar[i][1];
        let Boylam   = konumlar[i][2];
        isaretciler.push( L.marker([Enlem, Boylam]).bindPopup(KonumAdi) );
    }
    var isaretciGrubu = L.featureGroup(isaretciler).addTo(map);
    
    // Tüm işaretçiler ekranda görünecek şekilde haritayı ortala
    map.fitBounds(isaretciGrubu.getBounds());

  </script>


</body>
</html>