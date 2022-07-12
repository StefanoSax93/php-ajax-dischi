
<!-- Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, 
i dischi a php e li stamperà attraverso vue. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue dischi vue</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="../css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    
    <div class="d-flex flex-column h-100" id="app">
        <?php include '../partials/TheHeader.php' ?>

        <div class="bg_primary flex-grow-1 overflow-auto">
            <div class="container px-5 mt-5">     
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 gx-5">
                    <div class="col mb-4" v-for="song in songList">
                        <div class="text-center text-white bg_secondary p-4 h-100">
                            <img :src="song.poster" :alt="`immagine di ${song.author}`" class="song-img">
                            <h5 class="text-uppercase my-3">{{song.title}}</h5>
                            <div class="text-secondary">{{song.author}}</div>
                            <div class="text-secondary">{{song.year}}</div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>