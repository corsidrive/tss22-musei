# Appunti vari

òksdfdskfòdsnfsòdfjsdf
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