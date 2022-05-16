<?php
    include "../header.php";
    include "../app/config.php";
    include "../app/dependencias.php";
?>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            /* position: absolute;
            top: 0;
            bottom: 0;
            width: 100%; */
            width: 100%;
            height:500px;
            
        }
    </style>
</head>

<body>
<h2 class="text-center">Countries</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">World</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./nuevo_pais.php">New
                                    Country</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./todos_paises.php">All the
                                    countries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./mapa.php">Continents Map</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./map_api.php">Continents API</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </div>
        </div>
    </div>
    <hr>
    <div id="map"></div>
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiZGFueDM5OCIsImEiOiJjbDM2cHBtZXgwbm5lM2pydDJ5a2c4M3F1In0.3nONUNybtBDXIrgW6cuJag';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [0, 20],
            zoom: 1.1,
            projection: 'naturalEarth' // starting projection
        });
    </script>

</body>

</html>