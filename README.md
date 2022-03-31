# Appunti vari

## Articoli interssanti

- [Design pattern adapter](https://designpatternsphp.readthedocs.io/en/latest/Structural/Adapter/README.html)

```json

@startuml
title Relationships - Class Diagram

class OperaGAMAdapter {
  constructor(array opera)
  adatta():Opera
}
class OperaPMDAdapter {
  constructor(array opera)
  adatta():Opera
}

class Opera {
  + provenienza
  +string titolo
  +string autore
  +string immagine
  +string data
  getImmaginePiccola()
}

@enduml

```

## PDO 

### w3c PDO

- [Connect PDO](https://www.w3schools.com/php/php_mysql_connect.asp) 

### Ariticoli interessanti

- [Articolo sul fetchAll](https://phpdelusions.net/pdo#fetchall)
- [REPL PHP](https://replit.com/new/php_cli)


### Dati via POST

 

- [filter_input](https://www.php.net/manual/en/function.filter-input.php)
