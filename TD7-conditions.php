<!-- 
if et if/else ont deux formes : 
- sans accolades si une seule insctruction
- avec acoclades si plusieurs lignes
 -->

 <!-- elseif existe -->

 <!-- Structure de contole :
if: / endif; sans accolades
-->
<?php
$age = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($age >=18){ ?>
        <h1>Majeur</h1>
    <?php }else{ ?>
        <h1>mineur</h1>
    <?php } ?>

    <?php if($age >=18): ?>
        <h1>Majeur</h1>
    <?php else: ?>
        <h1>mineur py</h1>
    <?php endif; ?>

    <!-- Les opérateurs ternaires -->
    <h1><?=($age>=18)?"Majeur":"mineur ternaire"?></h1>
    

    <!-- Le bloc switch case est similaire aux autres langages -->
    <!-- Il existe aussi des formes alternatives  avec switch(): endswitch; -->

    <!-- => Les formes alternatives " : end; " sont principalement utilisées lorsque l'on va mixer
    le php dans du html -->

</body>
</html>
