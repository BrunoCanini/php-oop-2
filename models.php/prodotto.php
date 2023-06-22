<?php 

class Prodotto {

    use Razza;

    public $nome;
    public $prezzo;
    public $immagine;

    function __construct($_nome, $_prezzo, $_immagine)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
    }
}


?>