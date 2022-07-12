<?php 
    require "../../db/songdb.php";

    $filtroGenere = key_exists("genre", $_GET) ? $_GET["genre"] : "";
    
    $datiFiltrati = $songdb["response"];

    if($filtroGenere) {
        $datiFiltrati = array_filter($songdb["response"], function($song) use ($filtroGenere) {
            return $song["genre"] === $filtroGenere;
        });
    } 


    header("Content-Type: application/json");
    
    echo json_encode($datiFiltrati);

?>