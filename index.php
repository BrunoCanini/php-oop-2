<?php 

require __DIR__ . "/models.php/prodotto.php";
require __DIR__ . "/models.php/cibo.php";
require __DIR__ . "/models.php/cuccia.php";
require __DIR__ . "/models.php/categoria.php";
require __DIR__ . "/models.php/gioco.php";

$prodotto1 = new Prodotto("Pettine", "5$", new Categoria("-"));
$prodotto2 = new Cuccia("Casetta Di Legno", "150$", "Nera", "Grande", new Categoria("cane"));
$prodotto3 = new Cuccia("Castello Di Stoffa", "180$", "Blu", "Media", new Categoria("gatto"));
$prodotto4 = new Cibo("Polpetta", "10$", "Manzo", "10/08/24", new Categoria("catto"));
$prodotto5 = new Cibo("Scatoletta Tonno", "30$", "Tonno", "12/09/24", new Categoria("cane"));
$prodotto6 = new Gioco("Pallina", "15$", "bassa",  new Categoria("cane"));
$prodotto7 = new Gioco("Corda", "15$", "bassa",  new Categoria("gatto"));

$prodotti = [$prodotto1, $prodotto2, $prodotto3, $prodotto4, $prodotto5, $prodotto6, $prodotto7];

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
    
    <main>

    <h1>PRODOTTI GENERALI</h1>

        <?php foreach($prodotti as $prodotto){ ?>

            <div>
                <p> NOME: <?php echo $prodotto->nome ?> </p>
                <p> PREZZO: <?php echo $prodotto->prezzo ?> </p>
                <span> RAZZA: <?php echo $prodotto->categoria->razza ?> </span>
            </div>

        <?php } ?>

    </main>

</body>
</html>