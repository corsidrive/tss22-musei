<?php

class JSONModel {
    /**
     * @var string Il json non ancora convertito
     */
    private $jsonData;
    /**
     * Le informazioni convertite
     * @var [type]
     */
    private $data;

    /**
     * Metodo per leggere un file JSON
     * @param string $path percorso del file da aprire
     * @param boolean $useArrayAssoc mettere false se voglio degli oggetti
     * @return mixed
     */
    public function fromFile(string $path,$useArrayAssoc=true):array
    {
     if(file_exists($path)){

        $this->jsonData = file_get_contents($path);
        $this->data = json_decode($this->jsonData,$useArrayAssoc);
      
        
        if(json_last_error() !== JSON_ERROR_NONE){
           throw new Exception('formato json non valido',777);     
        };
         
     } else {
         $e = new Exception("😢 --> percorso non trovato", 666);
         throw $e; 
     }   
     return  $this->data;
    }
}