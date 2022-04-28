<?php
include_once "./download_image.php";
// http://93.62.170.226/foto/gam/Morelli/Leg1-02.jpg


$url = "http://93.62.170.226/foto/gam/Morelli/Leg1-02.jpg";
downloadImage($url);
$message = [];
if(!file_exists("../immagini_opere")){
    $message[] = "non esiste la cartella per le immagini";
}

if(!file_exists("../immagini_opere/originali")){
    $message[] = "non esiste la cartella per le immagini originali";
}

if(!file_exists("../immagini_opere/miniature/")){
    $message[] = "non esiste la cartella immagine miniature";
}

if(!file_exists("../immagini_opere/medie/")){
    $message[] = "non esiste la cartella immagine medie";
}

print_r(count($_SERVER['argv']));
echo implode("<br>",$message);