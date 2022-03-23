<?php
require "model/JSONModel.php";


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


// $model->fromString("{'Tiolo':'Senza titolo'}");



// $datiB = $model->fromFile("fileA.json");
// $model->save('mao')
// $model->saveDATE('mao')

