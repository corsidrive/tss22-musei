<?php
require "model/JSONModel.php";
require "class/IOpera.php";
require "class/OperaGAMAdapter.php";
require "model/OpereGAMModel.php";


try {
    
    $model = new JSONModel();
    $dati = $model->fromFile("file.json");

} catch (Exception $errore) {

   echo "------------------------------\n"; 
   echo "| NON HO TROVATO IL FILE     |\n";
   echo "------------------------------\n"; 
}


try {   
    $model = new JSONModel();
    $data = $model->fromFile('./__materiali/gam.json');

    if(!(count($data)>0)){
        echo "non ho trovato dati";
    }
    
    if(!is_array($data)){
        echo "non è un array";
    }

} catch (Exception $e) {
    echo "il test è fallito\n perche: ".$e->getMessage();
}



echo "---------------------------------------------\n";


$model = new OpereGAMModel();

$model->importOpere('./__materiali/gam.json');
$model->findByAutore('ciccio');
