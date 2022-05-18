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
        <p>
            <?php
            require_once "TD15-personne.class.php";
            $Steve = new Personne("Steve", "Lucas", 33);
            ?>
        <h3> Nom : <?= $Steve->getNom() ?> </h3>
        <h3> Prénom : <?= $Steve->getPrenom() ?> </h3>
        <h3> Age : <?= $Steve->getAge() ?> </h3>
        <?php unset($Steve) ?>
        </p>

        <?php echo "fin";  ?>
    </div>
</body>

</html>