<?php 

class Prodotto {
    public $nome;
    public $prezzo;
    public $categoria;

    function __construct($_nome, $_prezzo, Categoria $categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $categoria;
    }
}


?>