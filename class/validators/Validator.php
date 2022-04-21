<?php
class Validator {
    private $data;
    private $required;
    private $message = '';
    private $code;
    public function __construct($data,$requred=false) {
        $this->data = $data;
    }
    public function getMessage():string
    {
        return $this->message;
    }
    
    public function getCode():int
    {
        return $this->code;
    }

    public function getData()
    {
        return $this->data;
    }

}