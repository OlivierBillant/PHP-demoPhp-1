<?php 
$prenom = "Steve";

function afficher(){
    global $prenom;
    $GLOBALS["b"] = 12;
    var_dump($prenom);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Variables gloables</title>
</head>

<body>

    <div class="container">

        <h4>Les variables gloables</h4>
        
        <?php include("fonctions.php") ?>
        
        <?= afficher() ?>
        <?= var_dump($b) ?>
        
    </div>

</body>

</html>