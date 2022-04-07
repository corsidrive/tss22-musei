<?php

class UtenteCrud {

    private $pdo;
    
    public function __construct() {
        try{
            $this->pdo = new PDO(Config::DB_CONNECT,Config::DB_USERNAME,Config::DB_PASSWORD);
            // Abilita la visualizzazione degli errori nel pdo
            $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function create(Utente $utente)
    {
        try {
            
            $sql="INSERT INTO utenti (user_id,nome,cognome,email) 
                  VALUES (:user_id,:nome,:cognome,:email);";

            $pdostm = $this->pdo->prepare($sql);

            // Associo i valori ai parametri (:nome, ecc) definiti nella query
            $pdostm->bindValue(':user_id',$utente->getUserId());
            $pdostm->bindValue(':nome',$utente->getNome());
            $pdostm->bindValue(':cognome',$utente->getCognome());
            $pdostm->bindValue(':email',$utente->getEmail());

            $pdostm->execute();

        } catch (PDOException $e) {
           throw $e;
        }
           
    }
    /**
     * Questo metodo permette di trovare un utente 
     */
    public function read(int $user_id):?Utente
    {
        try {
       
            $sql="SELECT * FROM utenti where user_id = :user_id";
            $query = $this->pdo->prepare($sql);
            $query->bindValue(':user_id',$user_id);
            $query->execute();
            // riga ---> new Utente()
            // array[0]
            $res = $query->fetchAll(PDO::FETCH_CLASS,'Utente');

            print_r(count($res));

            if(count($res) == 0){
                return null;
            }

            if(count($res) == 1) {
                return $res[0];
            }else {
                throw new Exception('ho trovato più di un utente con lo stesso id');
            }

        } catch (PDOException $ex) {
            throw $ex;
        }
       
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
        try {

        
        $sql = "UPDATE utenti 
                SET nome = :nome, 
                    cognome = :cognome,
                    email = :email
        WHERE user_id = :user_id;";
        
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':nome',$utente->getNome(),PDO::PARAM_STR);
        $query->bindValue(':cognome',$utente->getCognome(),PDO::PARAM_STR);
        $query->bindValue(':email',$utente->getEmail(),PDO::PARAM_STR);
        $query->bindValue(':user_id',$utente->getUserId(),PDO::PARAM_INT);
        $query->execute();

        return $query->rowCount();
        
        }catch(PDOException $ex){
            throw $ex;
        }

    }

    public function delete(int $user_id)
    {
        try {

            $sql = "DELETE FROM utenti WHERE user_id = :user_id;";
            $query = $this->pdo->prepare($sql);
            $query->execute(array(
                ":user_id" => $user_id
            ));

        } catch (PDOException $th) {
            throw $th;
        }
    }



    


}