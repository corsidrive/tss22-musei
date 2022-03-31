<?php
require "../crud/UtenteCrud.php";
require "../class/Utente.php";

$utenteCrud = new UtenteCrud;
$risultato = $utenteCrud->readAll();

print_r($risultato);
echo "-------------------------------<br>";
$utente = new Utente();
$utente->setNome("Arrivo");
$utente->setCognome("Da Database");

$utenteCrud->create($utente);
$risultato = $utenteCrud->readAll();

print_r($risultato);
