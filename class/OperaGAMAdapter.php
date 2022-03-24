<?php
class OperaGAMAdapter implements IOpera {

    private $array;
    public function __construct(array $operaArray) {
        $this->array = $operaArray;
    }

    public function getTitolo()
    {
        return $this->array['Titolo'];
    }

    public function getAutore()
    {
        return $this->array['Autore'];
    }

    public function getData()
    {
        return $this->array['Datazione'];
    }

    public function getProvenienza()
    {
        return 'GAM'; // 'PMD'
    }

    public function getImmagine()
    {
        return $this->array['Immagine']; 
    }

}