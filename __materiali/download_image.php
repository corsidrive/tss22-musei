<?php
/** https://github.com/gumlet/php-image-resize */

use Gumlet\ImageResize;

include "../class/image_resize/ImageResize.php";
include "../class/image_resize/ImageResizeException.php";

// http://93.62.170.226/foto/gam/Morelli/Leg1-02.jpg
function downloadImage($url){
    $originali = '../immagini_opere/originali';
    $miniature = '../immagini_opere/miniature';
    $medie = '../immagini_opere/medie';
    @mkdir('../immagini_opere');
    @mkdir($originali);
    @mkdir($miniature);
    @mkdir($medie);

    $filename = basename($url);
    $originalePath = $originali."/".$filename;
    $mediePath = $medie."/".$filename;
    $miniaturePath = $miniature."/".$filename;

    $downloadImage = file_get_contents($url);
    file_put_contents($originalePath,$downloadImage);

    $image = new ImageResize($originalePath);
    $image->resizeToWidth(300);
    $image->save($mediePath);
    $image->resizeToWidth(100);
    $image->save($miniaturePath);
}

