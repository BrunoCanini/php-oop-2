<?php 

trait Razza {
   private $tipo;
   
   public function getTipo() {
    if ($this->tipo != "cane" && $this->tipo != "gatto" && $this->tipo != "cane/gatto") {
        throw new Exception("La razza dell'animale non corrisponde");
    }

    return $this->tipo;
}

   public function setTipo($_tipo){
    $this->tipo = $_tipo;
   }
}

?>