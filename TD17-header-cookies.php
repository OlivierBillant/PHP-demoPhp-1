<?php

if (!isset($_COOKIE['user'])) {
    echo "Bonjour";
    //creation cookie
    setcookie("user", "Visiteur", time() + 60 * 60);
} else {
    echo "Rebonjour";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Headers et cooklies</title>
</head>

<body>
    <div class="container">
        <h1>Les Headers, les cookies et les sessions</h1>

        <h2>Les headers</h2>
        <p>
            <br> La fonction header permet d'envoyer une requette http.
            <br> On peut rediriger en relatif, absolu ou via un autre site.
            <br> header('Location:');
        </p>

        <h2>Les cookies</h2>
        <p>
            <br> On utilise la fonction setcookie que l'on peut limiter dans le temps.
            <br> Plusieurs arguments : clef (nom), valeur (corps) et duree ("time + 30*24*60" pour 30j a partir de la date du jour).
            <br> Pour récupérer les données d'un cookie on utilisera la superglobale $_COOKIE
        </p>

        <h2>Les sessions</h2>
        <p>
            <br>Pour récupérer les infos d'une session
            <br>L'id de la session sera stockée dans une cookie
            <br><b> Avec session_start() </b>, une id de session est générée et permettra l'acces aux
            <br>caractéristiques de la session utilisateur
            <br>
            <br>Pour <b>ajouter des informations à la session</b> on utilisera la superglobale <b>$_SESSION</b>
            <br>$_SESSION['nom'] = "Shannon";
            <br>
            <br>Pour <b>consulter</b> on utilisera $_SESSION['nom']
            <br>
            <br>Il faut bien penser à créer des fonctions de desctruction des sessions
            <br>En effet, les sessions peuvent être facilement dérobées par une simple inspection

        </p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>