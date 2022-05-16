<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Fonction variable</title>
</head>

<body>

    <div class="container">

        <h4>Les fonctions variables</h4>
        Ces fonctions ont pour objectif de simplifier le code

        <?php include("fonctions.php") ?>
        <?php $a = "power" ?>
        <?php var_dump($a(3, 7)) ?>

        <br>Un use case serait que le client ait le choix entre plusieurs options d'une meme fonction
        <br>On modifiera seulement la variable fonction
        <br>Cela permet alors de faire reagir le code rapidement en conséquence. 

        <h4>Le passage d'une fonction en paramètre</h4>
        <br>Il faudra associer une fonction en variable, vérifier son type (string) puis son existence
        
        <h4>Les fonctions anonyme</h4>
        <br>Une fonction anonyme ne servira qu'une seule fois.
        <br>Voir TD11
    </div>

</body>

</html>