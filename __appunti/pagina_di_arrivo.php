<?php 

include "../Config.php";
include "../class/Utente.php";
include "../crud/UtenteCrud.php";

// 10 anni fa
print_r($_GET["id"]);

// oggi
$id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);

$uc = new UtenteCrud();
//print_r($uc->readAll());
$utente =$uc->read($id);

print_r($utente);