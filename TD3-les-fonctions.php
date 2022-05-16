<?php
$a = 12;
$b = "Plop";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions utiles en PHP</title>
</head>
<body>
    <p>
    <br>Affichage des informations d'une variable : var_dump();
    <br> Var dump de a <?= var_dump($a) ?>
    <br> Var dump de b  <?= var_dump($b) ?>
    <br>Existance : isset();
    <br> Ex <?= isset($b) ?>
    <br>Variable vide : empty();
    <br> La variable est elle vide : <?= empty($b) ?>
    <br> Var dump de b : <?= var_dump($b) ?>
    <br>Suppression : unset();
    <?php unset($b) ?>
    <br> Ex <?= var_dump($a) ?>
    <br> Ex <?= var_dump($b) ?>

    <?php
    if(!empty($a)){
        echo "<h1> $a </h1>";
    }
    ?>

    Le transtypage explicite est possible avec la fonction : settype()
    => Peu utilisé
    Le transtypage implicite se fera si l'on melange des variables :
    $a = "2 fingers";
    $b = 2 * $a;
    Donnera 4 car $a sera interprétée comme 2.
    </p>
</body>
</html>