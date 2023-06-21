<?php 

class Cibo extends Prodotto {
    public $ingredienti;
    public $scadenza;
    public $categoria;

    function __construct($_nome, $_prezzo, $_ingredienti, $_scadenza, Categoria $categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->ingredienti = $_ingredienti;
        $this->scadenza = $_scadenza;
        $this->categoria = $categoria;
    }
}

?>