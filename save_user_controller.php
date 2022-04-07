<?php
require "./crud/UtenteCrud.php";
require "./class/Utente.php";
require "./view/SaveUserView.php";
$userCrud = new UtenteCrud();
$utente = new Utente();
$utente->setNome(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS));
$utente->setCognome(filter_input(INPUT_POST,'cognome',FILTER_SANITIZE_SPECIAL_CHARS));

$userCrud->create($utente); 

header('location: rigaziamenti.php');




