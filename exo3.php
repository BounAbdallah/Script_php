<?php 

// Implémenter un algorithme pour faire une rotation à droite d'un tableau d'un certain nombre de positions.


function rotationDroite($tableau, $rotations){
    $nouveauTableau = array();

    $tailleTableau = count($tableau);

    for($i =$rotations; $i < $tailleTableau; $i ++) {
        $nouveauTableau[] = $tableau[$i];

    }
    return $nouveauTableau;
};

$tableau =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$rotations = 3;

$resultat = rotationDroite($tableau, $rotations);


 echo "Le resulta est  : ". print_r($resultat);
