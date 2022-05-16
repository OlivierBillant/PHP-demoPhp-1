<?php
$a = 12;
$b = "Plop";
$uneString = "uneString";
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

<br> Le transtypage explicite est possible avec la fonction : settype()
<br> => Peu utilisé
<br>  Le transtypage implicite se fera si l'on melange des variables :
<br>$a = "2 fingers";
<br>$b = 2 * $a;
<br>Donnera 4 car $a sera interprétée comme 2.
<br>
<br>On trouvera également : 
<br>- strtoupper
<br>- strtolower
<br>- ucwords
<br>- ucfirst
<br>- number_format()
<br>
<br>Les fonctions strpos rechreche un caractere dans une chaine:
<br>Dans la string "uneString" :
<br>- strpos de n : <?= strpos($uneString, "n") ?> 
<br>- strrpos de n : <?= strrpos($uneString, "n") ?>;  R prend la dernière occurence
<br>- stripos de s: <?= stripos($uneString, "s") ?>;  I omet la casse
<br>- strripos : <?= strripos($uneString, "s") ?>;  RI les deux


    </p>
</body>
</html>