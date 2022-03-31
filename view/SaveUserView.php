<?php
class SaveUserView {
    private $nomeSezione;
    private $nomeCategoria;

    public function __construct($nomeSezione = "",$nomeCategoria ="") {
        $this->nomeSezione = $nomeSezione;
        $this->nomeCategoria = $nomeCategoria;
        // print_r($this);
    }

    public function render()
    { 
        include "view/layout/head.php";
        include "view/layout/header.php";
        include "view/layout/sidebar.php";
        ?>
       
        <div class="p-5">
            <div class="display-3">
                Grazie per esserti iscritto
            </div>
            <div class="">
                <a class="btn btn-primary" href="./add_user_controller.php"> Aggiungi un altro utente </a>
            </div>
        </div>


        <?php
        include "view/layout/footer.php";
    }
} 