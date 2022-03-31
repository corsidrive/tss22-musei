<?php
require "./view/AddUserView.php";
$nomeSezione = 'Gestione Utenti';
$nomeCategoria = 'Aggiungi Utente';


$view = new AddUserView($nomeSezione,$nomeCategoria); 
$view->render();
