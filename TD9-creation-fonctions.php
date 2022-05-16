<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Les fonctions</title>
</head>

<body>
    <div class="container">
        <h1>Les fonctions</h1>
        <?php include("fonctions.php") ?>
        <?php $resultat = add(8, 3) ?>
        <br> La résultat de l'addition est <?= $resultat ?>

        <br>On peut donner des paramètres par défaut à une fonction qui seront utilisés
        <br>si on appelle notre fonction sans préciser les paramètres en question
         
    </div>
</body>

</html>