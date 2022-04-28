<?php
/** https://github.com/gumlet/php-image-resize */

use Gumlet\ImageResize;

include "../class/image_resize/ImageResize.php";
include "../class/image_resize/ImageResizeException.php";

function downloadImage($url){
    $originali = '../immagini_opere/originali';
    $miniature = '../immagini_opere/miniature';
    $medie = '../immagini_opere/medie';
    
    // Cartelle dove scaricare le immagini
    @mkdir('../immagini_opere');
    @mkdir($originali);
    @mkdir($miniature);
    @mkdir($medie);

    // http://93.62.170.226/foto/gam/Morelli/Leg1-02.jpg
    
    $filename = basename($url); // Leg1-02.jpg
    $originalePath = $originali."/".$filename;
    $mediePath = $medie."/".$filename;
    $miniaturePath = $miniature."/".$filename;

    // scarico l'immagine
    $downloadImage = file_get_contents($url);
    file_put_contents($originalePath,$downloadImage);

    
    $image = new ImageResize($originalePath);
    // creo immagine media (300px)
    $image->resizeToWidth(300);
    $image->save($mediePath);

    // creo e salvo immagine miniature
    $image->resizeToWidth(100);
    $image->save($miniaturePath);
}

