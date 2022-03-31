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
        print_r($this->nomeSezione);
        include "view/layout/head.php";
        include "view/layout/header.php";
        include "view/layout/sidebar.php";
        include "view/layout/footer.php";
    }
} 