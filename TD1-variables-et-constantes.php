<!-- Les variables :  
La déclaration commence par $
Attention les variables sont CASE SENSITIVE
Pas de chiffre apès le $
Lettres, chiffres et _ sont autorisées.
-->

<!-- On peut ainsi déclarer une variable $titre_page dans une balise Php en haut d'un doc
Puis accéder à la variable dans le html plus bas.
-->

<?php
$titre = "Connexion";
$age = 34;
$p1 = "Pierre";
$p2 = "Gael";
// php etant non type, on peut redefinir une variable avec un autre type
// $age = "trente-quatre";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titre?></title>
</head>
<body>
    <h1>Vous avez <?=$age?> ans</h1>
    <h2><?= "Prénom 1 : ".$p1." Prénom 2 : ".$p2 ?> </h2>
</body>
</html>
