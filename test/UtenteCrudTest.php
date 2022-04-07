<?php
require "../Config.php";
require "../script/install.php";
require "../crud/UtenteCrud.php";
require "../class/Utente.php";

$utenteCrud = new UtenteCrud;
$risultato = $utenteCrud->readAll();

// inserisco  Mario (Fabio)
// Modello l'utente Mario
$utente = new Utente();
$utente->setNome("Mario");
$utente->setCognome("Blue");
$utente->setEmail('a@b.it');

// Rendo l'utente persitente (lo salvo su db)
$utenteCrud->create($utente);

// inserisco Gianni morandi
$gianni = new Utente();
$gianni->setNome("Gianni");
$gianni->setCognome("Morandi");
$gianni->setEmail('giannimorandi@ciccio.it');
// persistenza
$gianniAppenaCreato = $utenteCrud->create($gianni);
// Test per la coerenza della tabella utenti
// non possono esistere 2 utenti con la stessa email
// - MYSQL -> chiave unica UNIQUE INDEX `email` (`email`)
try {
    // salvo per la seconda volta morandi  (giannimorandi@ciccio.it)
    $utenteCrud->create($utente);
    echo "Test Fallito<br>";
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        echo $e->getMessage() . "<br>";
        echo "Chiave duplicata: Esiste già un utente con questa email<br>";
    };
}

// Trovato un utente
$utenteTrovato = $utenteCrud->read(1);
if($utenteTrovato->getNome() == 'Mario'){
    echo "ok utente trovato<br>";
}

// Cambio nome e email
$utenteTrovato->setNome("Fabio");
$utenteTrovato->setEmail("fq@gp.it");

// do la persistenza alle modifiche
$utenteCrud->update($utenteTrovato);

$utenteModificato = $utenteCrud->read(1);

if($utenteTrovato->getNome() == 'Fabio'){
    echo "ok il nome è stato cambiato<br>";
}


$utenteCrud->delete(2);
if(count($utenteCrud->readAll()) == 1){
    echo "il numero di utenti è 1<br>";
}

$res = $utenteCrud->read(2);
if(is_null($res)){
    echo "ok utente cancellato";
}
