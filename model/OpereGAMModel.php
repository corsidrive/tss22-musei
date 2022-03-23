<?php

class OpereGAMModel extends JSONModel {


    public function importOpere($path)
    {
        // Paradigma Imperativo
        // $risultato = [];
        // foreach ($data as $key => $opera) {
            //     $risultato[$key] = new OperaGAMAdapter($opera);
            // }
            
        $data = parent::fromFile($path);
        // Paradigma Dichiarativo
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