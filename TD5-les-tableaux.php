<!-- Les tableaux -->
<?php
$tab[] = "Adel";
$tab[] = 12;
$tab[] = true;
$tab[] = 18.2;

// Permet d'afficher le tableau en débug.
var_dump($tab);
//Permet d'afficher le tableau sans le détail du debug.
print_r($tab);

//Si l'on précise l'indice, le tableau sera non ordonnée
$etudiants[5] = "Pierre";
$etudiants[20] = "Gael";
$etudiants[3] = "Plop";
var_dump($etudiants);

//Les tableaux associatifs : passe une clef en chaine de caractere
//On pourra lui passer directement en tableau par la variable
$classe["QCDA_006F"] = $etudiants;
//Ou passer un tableau par creation avec array()
$classe["QCDA_007F"] = array("Yannick", "Dominique", "Jérome", "Christelle");

//L affichage de l array $classe contiendra 2 tableaux
var_dump($classe);


//Le tableau mixte
//Va mélanger les types dans les indices qui vont s'incrementer apres le dernier rempli.

//Pour un tableau multidimensionnel, on passera un tableau enfant à un tableau parental.

//L'accès aux éléments d'un tableau se fera par un indice dans les crochets.

var_dump($classe["QCDA_006F"][5]);