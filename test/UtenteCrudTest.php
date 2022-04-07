<?php
require "../Config.php";
require "../script/install.php";
require "../crud/UtenteCrud.php";
require "../class/Utente.php";

$utenteCrud = new UtenteCrud;
$risultato = $utenteCrud->readAll();

$utente = new Utente();
$utente->setNome("Mario");
$utente->setCognome("Blue");
$utente->setEmail('a@b.it');
$utenteCrud->create($utente);

$utente = new Utente();
$utente->setNome("Gianni");
$utente->setCognome("Morandi");
$utente->setEmail('giannimorandi@ciccio.it');
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

// Trovato un utente
$utenteTrovato = $utenteCrud->read(1);

$utenteTrovato->setNome("Fabio");
// $utenteTrovato->setCognome("Qartararo");
$utenteTrovato->setEmail("fq@gp.it");


$utenteCrud->update($utenteTrovato);

$utenteModificato = $utenteCrud->read(1);
echo "<pre>";
print_r($utenteModificato);
echo "</pre>";