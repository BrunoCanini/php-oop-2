<?php 

require __DIR__ . "/models.php/traits.php";

require __DIR__ . "/models.php/prodotto.php";
require __DIR__ . "/models.php/cibo.php";
require __DIR__ . "/models.php/cuccia.php";
require __DIR__ . "/models.php/gioco.php";

$prodotto1 = new Prodotto("Pettine", "5$", "https://picsum.photos/400/300");
$prodotto1->setTipo("cane/gatto");
$prodotto2 = new Cuccia("Casetta Di Legno", "150$", "https://picsum.photos/400/300", "Nera", "Grande");
$prodotto2->setTipo("cane");
$prodotto3 = new Cuccia("Castello Di Stoffa", "180$", "https://picsum.photos/400/300", "Blu", "Media");
$prodotto3->setTipo("gatto");
$prodotto4 = new Cibo("Polpetta", "10$", "https://picsum.photos/400/300", "Manzo", "10/08/24");
$prodotto4->setTipo("cane");
$prodotto5 = new Cibo("Scatoletta Tonno", "30$", "https://picsum.photos/400/300", "Tonno", "12/09/24");
$prodotto5->setTipo("gatto");
$prodotto6 = new Gioco("Pallina", "15$", "https://picsum.photos/400/300", "bassa");
$prodotto6->setTipo("cane");
$prodotto7 = new Gioco("Corda", "15$", "https://picsum.photos/400/300", "bassa");
$prodotto7->setTipo("gatto");

$prodotti = [$prodotto1, $prodotto2, $prodotto3, $prodotto4, $prodotto5, $prodotto6, $prodotto7];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    
    <main>

    <h1>ANIMALANDIA</h1>
    <h2>PRODOTTI:</h2>

        <div class="container">
            <?php foreach($prodotti as $prodotto){ ?>

                <div class="box">

                    <p> NOME: <?php echo $prodotto->nome ?> </p>
                    <p> PREZZO: <?php echo $prodotto->prezzo ?> </p>

                    <?php if($prodotto->getTipo() == "cane"){ ?>
                        <?php echo '<i class="fa-solid fa-dog" style="color: #000000;"></i>' ?>
                    <?php } if($prodotto->getTipo() == "gatto"){ ?>
                        <?php echo '<i class="fa-solid fa-cat" style="color: #000000;"></i>' ?>
                    <?php } if($prodotto->getTipo() == "cane/gatto"){ ?>
                        <?php echo '<i class="fa-solid fa-dog" style="color: #000000;"></i>' . '<i class="fa-solid fa-cat" style="color: #000000;"></i>' ?>
                    <?php } ?> 

                    <div class="box-img">
                        <img src=" <?php echo $prodotto->immagine ?> " alt="">
                    </div>

                </div>

            <?php } ?>  
        </div>


    </main>

</body>
</html>