<?php 

class ValidateEmail extends Validator {

    public function rule():bool
    {
        // filter_input solo quando HTTP: $_POST / $_GET
        // filter_var  invece prende varibili generiche come input
        // FILTER_VALIDATE_EMAIL -> false quando non è valida ma 
        return filter_var($this->getData(),FILTER_VALIDATE_EMAIL);
      
        // return true;
    }
}