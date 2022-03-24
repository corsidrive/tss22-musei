<?php

class OpereGAMModel extends JSONModel {


    public function importOpere(string $path)
    {
        // ottengo array associativo delle opere
        $data = parent::fromFile($path);
        
        // 
        $risultato = array_map(function($opera){
            return new OperaGAMAdapter($opera);
        },$data);

        $this->data = $risultato;
    }

    public function findByAutore(string $autore)
    {
        foreach ($this->data as $opera){
            echo $opera->getProvenienza()."\n";
            echo $opera->getAutore()."\n";
        }

        print_r($this->data[0]);
    }

}