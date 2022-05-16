<?php 
$a = function($val1,$val2){
    return $val1 * $val2; }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Fonction Anonyme</title>
</head>

<body>

    <div class="container">

        <h4>Les fonctions anonymes</h4>
        
        <?php include("fonctions.php") ?>
        
        <br>Une fonction anonyme ne servira qu'une seule fois.
        
        <?= var_dump($a(4,3)) ?>
        
        <h4>Les fonctions typees</h4>
        <br>Pour typer  une fonction, on le notera :
        <br> $f = function((float)$val1, (float)$val2):float{};
    </div>

</body>

</html>