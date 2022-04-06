<?php
require "../Config.php";
require "../script/install.php";
require "../crud/UtenteCrud.php";
require "../class/Utente.php";

$utenteCrud = new UtenteCrud;
$risultato = $utenteCrud->readAll();
$utente = new Utente();
$utente->setNome("Arrivo");
$utente->setCognome("Da Database");
$utente->setEmail('a@b.it');

$utenteCrud->create($utente);
try {
    $utenteCrud->create($utente);
    echo "Test Fallito";
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        echo $e->getMessage() . "<br>";
        echo "Chiave duplicata: Esiste già un utente con questa email";
    };
}
