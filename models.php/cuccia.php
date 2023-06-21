<?php 

class Cuccia extends Prodotto {
    public $colore;
    public $grandezza;
    public $prova;

    function __construct($_nome, $_prezzo, $_colore, $_grandezza, $_prova)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->colore = $_colore;
        $this->grandezza = $_grandezza;
        $this->prova = $_prova;
    }
}

?>