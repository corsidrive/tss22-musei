<?php
require "class/IOpera.php";
require "class/OperaGAMAdapter.php";

$operaArray = [
    "Autore" => "MORELLI Domenico",
    "Titolo" => "Autoritratto a 16 anni",
    "Datazione" => "1839",
    "Tecnica" => "matita su carta seppia",
    "Dimensioni" => "mm 131(h) x 95(b)",
    "Immagine" => "http://93.62.170.226/foto/gam/Morelli/Leg1-01.jpg"
];

$opera = new OperaGAMAdapter($operaArray);

if($opera->getTitolo() !== "Autoritratto a 16 anni"){
    echo __LINE__. " - linea titolo errato\n";
    //die();
};


echo "tutto ok";