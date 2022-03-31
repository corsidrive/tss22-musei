<?php
require "../crud/UtenteCrud.php";
require "../class/Utente.php";

$utenteCrud = new UtenteCrud;
$risultato = $utenteCrud->readAll();

print_r($risultato);
