### Come scaricare un immagine

### Requisiti

Creare un importatore di opere dal json di un museo

Usare il file json [palazzo_madama.json](__materiali/palazzo_madama.json)

Creare uno script che partendo dal file json importa in un database le opere di un museo

Le immagini dovranno essere scaricate in locale.

- [ ] Creare uno script di installazione delle tabelle nel database

- [ ] 
- [ ] Creare una classe **Crud** per l'inserimento delle opere
  - [ ] dare la precedenza al metodo **create** e al metodo **readAll**  

#### Struttura del database

```puml

@startuml

' hide the spot
' hide circle
skinparam linetype ortho

entity "Museo"  {
  *museo_id : number 
  --
  nome
}

entity "Opera"  {
  * opera_id : \tint <<PK>>
  * museo_id : \tint <<FK>>
  --
  titolo : \t varchar(255)
  autore : \t varchar(255)
  data   : \t varchar(50) 
  immagine : \t varchar(255)
}

Museo  ||-right-o{  Opera 


@enduml

```