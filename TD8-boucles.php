<!-- 
Les boucles sont similaires à celles du en java    
Le foreach : foreach ($tableau as $valeur)
 -->

<?php
    //declaration menu
    $menu = ["Pierre", "Paul", "Jacques"];

    //menu avec clef/valeur on peut associer à un élément du tableau un lien href de redirection directement
    $menuValeur = ["Pierre"=>"index", "Martin"=>"mail-martin", "Jacques"=>"about"];
    /* 
    foreach($table as $key => $val):
    <a class="nav-link active" aria-current="page" href="<?= $val?>.php"><?=$key?></a>
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("TD8-parts/head.php") ?>
 
</head>
<body>
<!-- Inclusion de fichier
include :
-->
<?php include("TD8-parts/menu.php") ?>
</body>
</html>

<!-- L'inclusion obligatoire utilisera "require" -->
<!-- Des variants existent : include_once et require_once ce qui permet d'éviter des boucles d'inclusion. -->