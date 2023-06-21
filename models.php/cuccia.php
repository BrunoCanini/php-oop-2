<?php 

class Cuccia extends Prodotto {
    public $colore;
    public $grandezza;
    public $categoria;


    function __construct($_nome, $_prezzo, $_colore, $_grandezza, Categoria $categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->colore = $_colore;
        $this->grandezza = $_grandezza;
        $this->categoria = $categoria;

    }
}

?>