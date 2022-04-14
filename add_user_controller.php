<?php

// die();
require "./view/AddUserView.php";
$nomeSezione = 'Gestione Utenti';
$nomeCategoria = 'Aggiungi Utente';

$email = "";
$emailInvalid = false;
$emailErrore = "";

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // echo "appena arrivato";

}

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // print_r($_POST);
    // controllare i dati
    $test = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    
    if($test === false) {
        $emailErrore = "la mail è obbligatoria";
        $emailInvalid = true; 
    }else{
        $email = $test;
    }

}


$view = new AddUserView($nomeSezione,$nomeCategoria,$email,$emailErrore,$emailInvalid); 
$view->render();
