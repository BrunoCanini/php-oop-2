<?php 

class Cuccia extends Prodotto {
    public $colore;
    public $grandezza;


    function __construct($_nome, $_prezzo, $_immagine, $_colore, $_grandezza,)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->colore = $_colore;
        $this->grandezza = $_grandezza;
    }
}

?>