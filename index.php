<?php 

require __DIR__ . "/models.php/prodotto.php";
require __DIR__ . "/models.php/cibo.php";
require __DIR__ . "/models.php/cuccia.php";
require __DIR__ . "/models.php/categoria.php";

$prodotto1 = new Prodotto("prova", "prodotto");
$prodotto2 = new Cibo("Hamburger", "10$", "manzo", "10/08/24", new Categoria("gatto"));
$prodotto3 = new Cuccia("casetta", "100$", "cuccia", "nera", "gigante");
$prodotto4 = new Cibo("pasta", "30$", "sugo", "12/09/24", new Categoria("cane"));

var_dump($prodotto1);
var_dump($prodotto2);
var_dump($prodotto3);
var_dump($prodotto4);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>