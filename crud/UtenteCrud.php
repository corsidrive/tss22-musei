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
        try {
            
            $sql="INSERT INTO utenti (user_id,nome,cognome) 
                  VALUES (:user_id,:nome,:cognome);";

            $pdostm = $this->pdo->prepare($sql);

            // Associo i valori ai parametri (:nome, ecc) definiti nella query
            $pdostm->bindValue(':user_id',$utente->getUserId());
            $pdostm->bindValue(':nome',$utente->getNome());
            $pdostm->bindValue(':cognome',$utente->getCognome());

            $pdostm->execute();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
           
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

        // indico interfaccia    
        } catch (\Throwable $th) {
            echo $th->getMessage();
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