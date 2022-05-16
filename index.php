<!-- Balises Php -->
<!-- L'ensemble du code sera entouré par des PHP. -->
<!-- La balise echo fera un syso -->


<?php 
    echo '<h1>Hello World !</h1>';
?>

<!-- Afficher directement dans echo -->
<?= "..." ?>

<!-- Attention on ne peut pas créer le projet n'importe ou.
il faudra aller directement dans le dossier d'installation de Wamp -->

<!-- Pour accéder à plusieurs fichiers php dans un même dossier on ajoutera dossier/fichier.php  -->

<!-- On pourra également n'avoir que du HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?= "Formation php" ?> </h1>
</body>

</html>

<!-- La concatenation se fait par . et non par + -->
