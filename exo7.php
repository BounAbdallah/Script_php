<?php 
        //   ---Exercice--7-- //

//Écrire un programme qui prend un tableau de chaînes de caractères et crée une nouvelle chaîne en concaténant tous les éléments.


$nombreElements = readline("Entrez le nombre d'éléments dans le tableau : ");

$tableauChaines = array();

for ($i = 0; $i < $nombreElements; $i++) {
  echo "Entrez l'élément " . ($i + 1) . " : ";
  $tableauChaines[] = readline();
}

$chaineConcatenee = "";
foreach ($tableauChaines as $chaine) {
  $chaineConcatenee .= $chaine;
}

// Afficher la chaine concaténée
echo "Chaîne concaténée : " . $chaineConcatenee . PHP_EOL;


