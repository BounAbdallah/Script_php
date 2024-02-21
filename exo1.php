
<?php

// Exercice 1  : 
//Écrire un programme qui calcule le produit de tous les éléments d'un tableau d'entiers.


function produitTableau($tableau) {
  $produit = 1;
  foreach ($tableau as $valeur) {
    $produit *= $valeur;
  }
  return $produit;
}


$tableau = array(1, 2, 3, 4, 7);
$produit = produitTableau($tableau);

echo "Le produit des éléments du tableau est : " . $produit . PHP_EOL;

