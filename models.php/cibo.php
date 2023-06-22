<?php 

class Cibo extends Prodotto {
    public $ingredienti;
    public $scadenza;

    function __construct($_nome, $_prezzo, $_immagine, $_ingredienti, $_scadenza,)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->ingredienti = $_ingredienti;
        $this->scadenza = $_scadenza;
    }
}

?>