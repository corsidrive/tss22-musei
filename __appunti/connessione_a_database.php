<?php 
require "../class/Utente.php";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=musei_tss","root","");

    $sql = "SELECT * FROM utenti;";
    $query = $pdo->query($sql);

    $risultato = $query->fetchAll(PDO::FETCH_CLASS,"Utente");
   
    
    echo "<pre>";
    print_r($risultato);
    echo "</pre>";

} catch (PDOException $e) {
    echo "HAI TOPPATO: ".$e->getMessage();
}

