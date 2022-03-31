<?php
class AddUserView {
    private $nomeSezione;
    private $nomeCategoria;
    public function __construct($nomeSezione,$nomeCategoria) {
        $this->nomeSezione = $nomeSezione;
        $this->nomeCategoria = $nomeCategoria;
        // print_r($this);
    }

    public function render()
    { 
        //print_r($this->nomeSezione);
        include "view/layout/head.php";
        include "view/layout/header.php";
        include "view/layout/sidebar.php";
        ?>
        <form action="save_user_controller.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control"
                   name="nome" 
                   type="text">
        </div>

        <div class="mb-3">
            <label class="form-label">Cognome</label>
            <input class="form-control"
                   name="cognome" 
                   type="text">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Aggiungi utente</button>
        </div>
        </form>

        <?php
        include "view/layout/footer.php";
    }
} 