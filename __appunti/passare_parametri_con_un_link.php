<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passare parametri con il metodo get</title>
</head>
<body>
    <?php 
    include "../Config.php";
    include "../class/Utente.php";
    include "../crud/UtenteCrud.php";

    $uc = new UtenteCrud;
    $utenti = $uc->readAll(); 


    foreach($utenti as $utente ){ ?>
        <a href="pagina_di_arrivo.php?nome=luigi&id=<?=$utente->getUserId()?>">link  <?= $utente->getNome()." ". $utente->getCognome()?> </a><br>
    <?php }
    ?>
    
    <pre>
    ?
    nome=luigi
    &
    id=4
    &
    colore=rosso    
</pre>
</body>
</html>