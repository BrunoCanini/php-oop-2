<?php 

class Gioco extends Prodotto {
    public $resistenza;

    function __construct($_nome, $_prezzo, $_immagine, $_resistenza,)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->resistenza = $_resistenza;
    }
}

?>