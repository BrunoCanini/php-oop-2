<?php 

class Cibo extends Prodotto {
    public $ingredienti;
    public $scadenza;
    public $razza;

    function __construct($_nome, $_prezzo, $_ingredienti, $_scadenza, Categoria $razza)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->ingredienti = $_ingredienti;
        $this->scadenza = $_scadenza;
        $this->razza = $razza;
    }
}

?>