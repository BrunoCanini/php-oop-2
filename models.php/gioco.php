<?php 

class Gioco extends Prodotto {
    public $resistenza;
    public $categoria;

    function __construct($_nome, $_prezzo, $_immagine, $_resistenza, Categoria $categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->resistenza = $_resistenza;
        $this->categoria = $categoria;
    }
}

?>