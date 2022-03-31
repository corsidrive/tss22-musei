<?php

class UtenteCrud {

    private $pdo;
    
    public function __construct() {
        try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=musei_tss","root","");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }


    public function create(Utente $utente)
    {
        
    }

    public function read(int $user_id)
    {
        
    }

    public function readAll():array
    {

        try {
       
            $sql = "SELECT * FROM utenti;";
            $query = $this->pdo->query($sql);
            $risultato = $query->fetchAll(PDO::FETCH_CLASS,"Utente");
            
            return $risultato;

        } catch (\Throwable $th) {
            //throw $th;
        }


       
    }

    public function update(Utente $utente)
    {
        # code...
    }

    public function delete(int $user_id)
    {
        # code...
    }



    


}