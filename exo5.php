<?php


// Définir les deux tableaux
$tableau1 = array(1, 2, 3, 4, 0 , 5);
$tableau2 = array(2, 3, 5, 6, 0 , 7);

// Trouver les éléments communs
$elementsCommuns = array_intersect($tableau1, $tableau2);

// Afficher les éléments communs
print_r($elementsCommuns);

