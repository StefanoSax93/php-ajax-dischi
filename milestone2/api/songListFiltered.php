<?php 
    require "../../db/songdb.php";

    $filtroGenere = key_exists("genre", $_GET) ? $_GET["genre"] : "";
    
    $datiFiltrati = $songdb["response"];

    if($filtroGenere) {
        $datiFiltrati = array_filter($datiFiltrati, function($song) use ($filtroGenere) {
            return strtolower($song["genre"]) === $filtroGenere;
        });
    } 
    

    header("Content-Type: application/json");
    
    echo json_encode($datiFiltrati);

?>