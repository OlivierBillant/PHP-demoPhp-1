<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>OOP</title>
</head>

<body>
    <div class="container">
        <h1>OOP in php</h1>
        <h4>Généralités sur l'objet en php</h4>
        <p>
            <!-- Personne étant devenu une classe abstraite, transforme Steve en client -->
            <?php
            require_once "TD15-client.class.php";
            $Steve = new App\TD15\Client("Steve", "Lucas", 33, "Rue de Brest", "07");
            ?>
            <br> Nom : <?= $Steve->getNom() ?>
            <br> Prénom : <?= $Steve->getPrenom() ?>
            <br>Age : <?= $Steve->getAge() ?>
            <?php unset($Steve) ?>
        </p>

        <?php echo "fin";  ?>
    </div>

    <div class="container">
        <h4>L'héritage</h4>
        <p>
            L'héritage est également permis en php par le mot clef extends dans la déclaration de la classe.
            <br>La classe parent est ensuite appellée par parent::attributParent.
        </p>
        <p>
            <?php
            $John = new App\TD15\Client("John", "Doe", 33, "Rue de Paris", "06");
            ?>

            <br> Nom : <?= $John->getNom() ?>
            <br> Prénom : <?= $John->getPrenom() ?>
            <br>Age : <?= $John->getAge() ?>
            <br>Adresse : <?= $John->getAdresse() ?>
            <br>Téléphone : <?= $John->getTel() ?>
        </p>
    </div>

    <div class="container">
        <h4>Les attributs statiques</h4>
        <p>
            On les appellera par nomClasse::getFonction();
        </p>
    </div>

    <div class="container">
        <h4>Les classes abstraites</h4>
        <p>
            Le mot clef sera toujours abstract.
            <br> On pourra l'appliquer aux fonctions en le précisant dans le prototype.

            <?php
            require_once "TD15-vendeur.class.php";
            $Billy = new App\TD15\Vendeur("Billy", "Butch", 34, "32k");
            ?>
            <br> Nom : <?= $Billy->getNom() ?>
            <br> Prénom : <?= $Billy->getPrenom() ?>
            <br>Age : <?= $Billy->getAge() ?>
            <br>Chiffre d affaire : <?= $Billy->getChiffreAffaire() ?>
        </p>
    </div>

    <div class="container">
        <h4>Les interfaces</h4>
        <p>
            Le mot clef est toujours interface.
            <br> Elle est appelée par "implements"
        </p>
    </div>

    <div class="container">
        <h4>Les exceptions</h4>
        <p>
            Seront levées par "throws new Exception('Message')"
        </p>
    </div>

    <div class="container">
        <h4>Les espaces de nom</h4>
        <p>
            Sont des packages qui permettent de regrouper les classes.
            <br> On appelera les classes de la facon suivante : 
            <br> $Steve = new App\TD15\Client("Steve", "Lucas", 33, "Rue de Brest", "07");
            <br>Pour éviter d'avoir à preciser systématiquement le chemin on pourra utiliser
            <br>"use App\namespace\class" qui permettra d'importer directement le package.
            <br>
            <br>L'utilisation d'aliases avec "as" permet de faciliter les appels
            <br>Ex : "use App\namespace\class as defaultPathway"
        </p>
    </div>
</body>

</html>