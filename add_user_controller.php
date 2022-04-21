<?php

// die();
require "./view/AddUserView.php";
$nomeSezione = 'Gestione Utenti';
$nomeCategoria = 'Aggiungi Utente';

$email = "";
$emailInvalid = false;
$emailErrore = "";

$nome = "";
$nomeInvalid = false;
$nomeErrore = "";

$formIsValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // echo "appena arrivato";

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];//
    $test = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($test === false) {
        $emailErrore = "la mail è obbligatoria";
        $emailInvalid = true;
        $formIsValid = false;
    }

    var_dump($nome);
    var_dump(strlen($nome));
    var_dump(strlen($nome) === 0);
 
    if (strlen($nome) === 0) {
        $nomeErrore = "il nome è obbligatorio";
        $nomeInvalid = true;
        $formIsValid = false;
       echo "entro";
        // die();
    }

    if ($formIsValid) {


        var_dump($_POST);

        $userCrud = new UtenteCrud();
        $utente = new Utente();
        $utente->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $utente->setCognome(filter_input(INPUT_POST, 'cognome', FILTER_SANITIZE_SPECIAL_CHARS));

        $userCrud->create($utente);

        header('location: rigaziamenti.php');
    }
}


$view = new AddUserView(
    $nomeSezione,
    $nomeCategoria,
    $email,
    $emailErrore,
    $emailInvalid,
    $nome,
    $nomeErrore,
    $nomeInvalid
);
$view->render();
