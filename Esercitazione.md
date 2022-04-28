## Esercitazione Importatore Opere

### Requisiti

Creare un importatore di opere dal json di un museo

Usare il file json [palazzo_madama.json](__materiali/palazzo_madama.json)

- consiglio di limitare importazione 10

Creare uno script che partendo dal file json importa in un database le opere di un museo.

Le immagini dovranno essere scaricate in locale.

### Classe per le immagini

Esempio di applizione classe immagini
 - [__materiali\download_image.php](__materiali\download_image.php)

 - [__materiali\prova-di-download-test.php](__materiali\prova-di-download-test.php)

#### Documentazione ufficiale classe di ridimensionamento

- [php-image-resize](https://github.com/gumlet/php-image-resize)

DA FARE:

- [ ] Creare uno script di installazione delle tabelle nel database
  - Museo
  - Opere

come abbiamo fatto qui: 
[https://github.com/corsidrive/tss22-musei/blob/gestione-utenti/script/install.php](https://github.com/corsidrive/tss22-musei/blob/gestione-utenti/script/install.php)

- [ ] Creare una classe **OperaCrud** per l'inserimento delle opere
  - [ ] dare la precedenza al metodo **create** e al metodo **readAll**  

- [ ] Importare le opere da un filejson
  - [ ] Usare Adpter per fare inserimeto ad db opere

#### Struttura del database

<img src="http://www.plantuml.com/plantuml/png/RO_1IiDG44NtynMNRhH2G8Hif9Ikt8Ze1mWo9aCpcFScJEO9fVNVJID1XIulXtEOsOt17YNrT8LEMq5qWd6mM7QZtlH2uuVcWPqJUiqIXq5W7fqHIGwD0rPFPHHR0KS2Rj9vl6cBU-IItiL1G5KHa2q9VVrgpuCuBnhil7wyrz0Ss6nU7hVRcItDF-nXOajuobblCyGdUzEnNz_LzPe0Bc4k5r7BmS1_LD-kGO2cn7lDbxpf_lbTu7IgNFTTL7O4vbze9xajgVy6">
