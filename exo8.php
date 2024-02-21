<?php 

function calculerMediane($tableau) {
    // Trier le tableau
    sort($tableau);
  

    $longueurTableau = count($tableau);
  
    // Si le nombre d'éléments est impair, la médiane est l'élément central

    if ($longueurTableau % 2 == 1) {
      return $tableau[$longueurTableau / 2];
    }
  
    // Si le nombre d'éléments est pair, la médiane est la moyenne des deux éléments centraux
    else {
      $mediane1 = $tableau[$longueurTableau / 2 - 1];
      $mediane2 = $tableau[$longueurTableau / 2];
      return ($mediane1 + $mediane2) / 2;
    }
  }
  $tableau = array(1, 5, 3, 6, 4);

  $mediane = calculerMediane($tableau);
  
  echo "La médiane du tableau est : " . $mediane . PHP_EOL;
    