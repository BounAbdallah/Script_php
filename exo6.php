<?php

        //-----Exercice --6--//
//Écrire une fonction qui retourne tous les éléments qui n'ont pas de doublons dans un tableau.

function getElementsUniques($tableau) {
    $elementsUniques = array();
    foreach ($tableau as $element) {
      if (!in_array($element, $elementsUniques)) {
        $elementsUniques[] = $element;
      }
    }
    return $elementsUniques;
  }
  
  $tableau = array(1, 2, 3, 2, 4, 6, 5, 1, 6);

  print_r ($tableau);


  $elementsUniques = getElementsUniques($tableau);

  print_r($elementsUniques);
   