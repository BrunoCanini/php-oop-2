<?php 

class Gioco extends Prodotto {
    public $resistenza;
    public $categoria;

    function __construct($_nome, $_prezzo, $_resistenza, Categoria $categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->resistenza = $_resistenza;
        $this->categoria = $categoria;
    }
}

?>