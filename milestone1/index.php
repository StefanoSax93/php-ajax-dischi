<?php 
/*
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
*/

include '../db/songdb.php';

$songResponse = [];
$songList = [];

foreach ($songdb as $song) {
    $songResponse[] = $song['response'];
};

foreach ($songResponse as $songs) {
    foreach ($songs as $song) {
        $songList[] = $song;
    }
}

// var_dump($songList);

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

        <div class="bg_primary flex-grow-1 overflow-auto">
            <div class="container px-5 mt-5">     
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 gx-5">

                    <?php foreach ($songList as $song) { ?>
                        <div class="col mb-4">
                            <div class="text-center text-white bg_secondary p-4 h-100">
                                <img src="<?php echo $song['poster'] ?>" alt="" class="song-img">
                                <h5 class="text-uppercase my-3"><?php echo $song['title'] ?></h5>
                                <div class="text-secondary"><?php echo $song['author'] ?></div>
                                <div class="text-secondary"><?php echo $song['year'] ?></div>
                            </div>
                        </div>
                    
                    <?php } ?>

                </div>
            </div>    
        </div>
    </div>
    
</body>
</html>