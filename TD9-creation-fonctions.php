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
        <h4>Test d'appel à une fonction </h4>
        <?php include("fonctions.php") ?>
        <?php $resultat = add(8, 3) ?>
        <br> La résultat de l'addition est <?= $resultat ?>

        <h4>Les paramètres par défaut</h4>
        <br>On peut donner des paramètres par défaut à une fonction qui seront utilisés
        <br>si on appelle notre fonction sans préciser les paramètres en question
        
        
        <h4>Les fonctions statiques</h4>
        <br>Une variable statique correspondra à une variable de classe (en java)
        <br>On la déclare avec le "static $variable_statique"
        
        <h4>Les fonctions variables</h4>
        Voir TD10.


    </div>
</body>

</html>