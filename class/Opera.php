<?php

class Opera  {
    private $provenienza;
    private $titolo;
    private $autore;
    private $data;
    private $immagine;

    function getTitolo(){
        return $this->titolo;
    }

    function setTitolo(string $titolo){
        $this->titolo = $titolo; 
    }

    function getAutore(){
        return $this->autore;
    }

    function setAutore(string $autore){
        $this->autore = $autore; 
    }

    function getData(){
        return $this->data;
    }

    function setData(string $data){
        $this->data = $data; 
    }

    function getProvenienza(){
        return $this->provenienza;
    }

    function setProvenienza(string $provenienza){
        $this->provenienza = $provenienza; 
    }

    function getImmagine(){
        return $this->immagine;
    }

    function setImmagine(string $immagine){
        $this->immagine = $immagine; 
    }
}