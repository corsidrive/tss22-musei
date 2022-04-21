<?php
include "../class/validators/Validator.php";
include "../class/validators/ValidateEmail.php";
// $required = true;
// $email = new ValidateEmail('a@b.it');

// if(!$email->rule()){
//     echo $email->getMessage()."<br>";
// }else{
//     echo "ok,la mail ".$email->getData()." è corretta <br>";
// };

// $email = new ValidateEmail('ait');

// if(!$email->rule()){
//     echo $email->getMessage()." ".$mail->getData()."<br>";
// }else{
//     echo "ok,<br>";
// };

// $email = new ValidateEmail('',true);

// if(!$email->rule()){
//     echo $email->getMessage()." ".$mail->getData()."<br>";
// }else{
//     echo "ok,<br>";
// };

// $email = new ValidateEmail('');

// if(!$email->rule()){
//     echo $email->getMessage()." ".$mail->getData()."<br>";
// }else{
//     echo "ok,<br>";
// };


$tests = [
    // data ,         required ,   risultato atteso
    ['aaa',           true,        false,__LINE__,"email non corretta, obbligatoria"], 
    ['aaa',           false,       false,__LINE__],
    ['',              true,        false,__LINE__],
    ['    ',          true,        false,__LINE__],
    ['',              false,       true, __LINE__,"email non obbligatoria, utente non scrive nulla, la validazione da true"],
    ['     ',         false,       true, __LINE__,"email non obbligatoria, utente scrive una riga di spazi, la validazione da true"],
    ['a@b.it',        true,        true, __LINE__],
    ['    a@b.it    ',true,        true, __LINE__,"la mail è obbligatoria, l'utente scrive una mail corretta ma mette spazi davnti e diero alla mail,mi aspetto true"],
    ['a@b.it',        false,       true, __LINE__],
    ['   a@b.it   ',  false,       true, __LINE__,"la mail noe è obbligatoria, l'utente scrive una mail corretta ma mette spazi davnti e diero alla mail, mi aspetto true"],
];


foreach ($tests as $key => $test) {

    $emailDaTestare = $test[0];
    $required = $test[1];
    $risultatoAtteso = $test[2];
    $linea = $test[3];

    // list($emailDaTestare,$required,$risultatoAtteso,$linea) = $test;

    $email = new ValidateEmail($emailDaTestare,$required);
    $testRiuscito = $email->rule() === $risultatoAtteso;

    if(!$testRiuscito){
        echo "test fallito: linea: $linea  \"$emailDaTestare\" mi aspettavo <br>";
        var_dump($risultatoAtteso);
        echo "ho trovato";
        var_dump($email->rule());
        echo "<hr>";
    }
}