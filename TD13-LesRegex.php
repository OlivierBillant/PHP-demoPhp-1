<?php
$regex = "/(\d{1,2})\-(\d{1,2})\-(\d{4})/";
$chaine = "Aujourd'hui, la date est le 17-05-2022 !";
preg_match($regex, $chaine, $resultat);
// var_dump($resultat);
$motif = "/(\d{1,2})\/(\d{1,2})\/(\d{4})/";
$avant = "01/04/2014";
$apres = preg_replace($motif, "$3-$2-$1", $avant);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Les RegEx</title>
</head>

<body>
    <div class="container">
        <h2>Les RegEx</h2>
        <br>
        <h3>preg_match</h3>
        <p>La fonction preg_match prend 3 paramètres</p>
        <p>
            <br>Début : ^
            <br>Fin : $
            <br>Placeholder : .
            <br>Creation d'intervalles : [a-z] n'acceptera que les lettres
            <br>L'amplitude : {1;3} autorisera jusqu'à 3 caractères du type défini
            <br>L'exlusion de caractères : \. permet de traiter le caractère . et non pas
            le placeholder.
            <br>Exemple :
            <?php if (!empty($resultat)) { ?>
                <?= var_dump($resultat); ?>
                Le date du jour est Jour : <?= $resultat[1] ?>, Mois : <?= $resultat[2] ?>, Année : <?= $resultat[3] ?>
            <?php } else { ?>
                Pas de date présente dans la chaine
            <?php }; ?>
        </p>

        <h3>preg_replace</h3>
        La preg_replace va prendre en argument :
        <br>- arg 1 : le motif regex
        <br>- arg 2 : l'ordre des composition des éléments 
        <br>- arg 3 : la string initiale
        <br>Ex : $apres = preg_replace($motif, "$3-$2-$1", $avant);
        <br>
            <?= var_dump($avant); ?>
            <?= var_dump($apres); ?>
        <p>

        </p>
    </div>
</body>

</html>