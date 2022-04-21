<?php
class AddUserView
{
    private $nomeSezione;
    private $nomeCategoria;
    private $emailErrore;
    private $emailInvalid;
    private $email;

    public function __construct(
        $nomeSezione,
        $nomeCategoria,
        $email,
        $emailErrore,
        $emailInvalid,
        $nome,
        $nomeErrore,
        $nomeInvalid
    ) {
        $this->nomeSezione = $nomeSezione;
        $this->nomeCategoria = $nomeCategoria;

        $this->email = $email;
        $this->emailErrore = $emailErrore;
        $this->emailInvalid = $emailInvalid;

        $this->nome = $nome;
        $this->nomeErrore = $nomeErrore;
        $this->nomeInvalid = $nomeInvalid;

        // print_r($this);
    }

    public function render()
    {
        //print_r($this->nomeSezione);
        include "view/layout/head.php";
        include "view/layout/header.php";
        include "view/layout/sidebar.php";

      

?>

        <form action="add_user_controller.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Cognome</label>

                <input class="form-control" name="cognome" type="text">
                <div class="invalid-feedback">
                     
                </div>

            </div>
            <div class="mb-3">
                <label class="form-label">Nome</label>

                <?php $nomeClass = $_SERVER['REQUEST_METHOD'] === 'POST' ? ($this->nomeInvalid ? "is-invalid" : "is-valid") : ""; ?>

                <input class="form-control   <?= $nomeClass ?>" 
                name="nome"
                value="<?= $this->nome ?>"
                type="text">

                <div class="invalid-feedback">
                <?= $this->nomeErrore ?>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">email</label>
                <?php $emailClass = $_SERVER['REQUEST_METHOD'] === 'POST' ? ($this->emailInvalid ? "is-invalid" : "is-valid") : ""; ?>
                <input class="form-control <?= $emailClass ?>" name="email" value="<?= $this->email ?>" type="text">

            </div>

            <!-- <div class="mb-3">
            <label class="form-label">eta</label>
            <input class="form-control"
                 max="100"
                 min="18"
                 step="1"
                   name="number" 
                   type="number" >
                   
        </div> -->



            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Aggiungi utente</button>
            </div>
        </form>

<?php
        include "view/layout/footer.php";
    }
}
