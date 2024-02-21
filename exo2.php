<?php  

//Exercice 2  : 
//Écrire une fonction qui supprime les éléments en double d'un tableau et renvoie le tableau sans doublons.



// Fonction pour supprimer les doublons d'un tableau
function supprimerDoublons($tableau) {
  $valeursUniques = array();
  foreach ($tableau as $valeur) {
    if (!in_array($valeur, $valeursUniques)) {
      $valeursUniques[] = $valeur;
    }
  }
  return $valeursUniques;
}

// Exemple d'utilisation
$tableau = array(1, 2, 3, 4, 5, 2, 3, 1,'bonjour','bonjour');
$tableauSansDoublons = supprimerDoublons($tableau);

echo "Le tableau sans doublons est : ";
print_r($tableauSansDoublons);

// echo get_debug_type($tableau);
// var_dump($tableauSansDoublons);


