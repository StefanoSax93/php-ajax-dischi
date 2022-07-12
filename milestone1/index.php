<?php 
/*
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
*/

include '../db/songdb.php';

$songList = [];

foreach ($songdb as $song) {
    $songList[] = $song['response'];
}

var_dump($songList);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="d-flex flex-column h-100">
        <?php include '../partials/TheHeader.php' ?>

        <div class="bg_primary flex-grow-1">

        </div>
    </div>
    
</body>
</html>