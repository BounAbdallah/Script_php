
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

?>;

<?php 

    function produitTableau2($tableau2) {
        $produit = 0;
        
        
        foreach ($tableau2 as $valeur){
            $produit += $valeur;
        }
        return $produit;
    }
    $tableau2 = array(20,45);
    $product = produitTableau2($tableau2);

    echo ("le produit est de  : ". $product .PHP_EOL );
?>;

<br>
<br>
<br>


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


?>;
<br>
<br>
<br>

<?php 
// Exercice 3  : 
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





 
?>;
 <br>
 <br>
 <br>

 <?php
// Exercice 4  :
//Écrire un programme qui compte le nombre de voyelles dans une chaîne de caractères présente dans un tableau. 
function compterVoyelle($chaine){
    $voyelles = array( "a", "e", "i", "o", "u", "y");
    
        $nmbVoyelles = 0;
    
        for($i = 0; $i < strlen($chaine); $i++){
            if (in_array($chaine[$i],$voyelles)){
                $nmbVoyelles++;
            }
        }
        return $nmbVoyelles;
    }
    
    $les_chaines = array("Bonjour", "Simplon Senegal");
    $nmbrTotalChaine = 0;
    foreach($les_chaines as $chaine){
        $nmbrVoyelleChaine = compterVoyelle($chaine);
        
        echo "Le nombre de voyelle dans : .'$chaine' est de : $nmbrVoyelleChaine <br>".PHP_EOL;
        $nmbrTotalChaine += $nmbrVoyelleChaine; 
    
        echo "le nombre de voyelles total est : '$nmbrTotalChaine'  <br> ".PHP_EOL; 
    }


    ?>
<br>
<br>
<br>
    <?php



$symptomes = array(
    "fievre" => 5,
    "toux" => 4,
    "essoufflement" => 6,
    "fatigue" => 3,
    "perte_gout_odorat" => 2,
  );
  
  // Définir les facteurs de risque et leurs scores
  $facteurs_risque = array(
    "age_sup_65" => 3,
    "maladie_chronique" => 2,
    "voyage_zone_risque" => 1,
  );
  
  // Fonction pour évaluer le patient
  function evaluerPatient($symptomes_patient, $facteurs_risque_patient) {
    $score_total = 0;
    global $facteurs_risques;
    global $symptomes;
  
    // Calculer le score des symptômes
    foreach ($symptomes_patient as $symptome) {
      if (isset($symptomes[$symptome])) {
        $score_total += $symptomes[$symptome];
      }
    }
  
    // Calculer le score des facteurs de risque
    foreach ($facteurs_risque_patient as $facteur_risque) {
      if (isset($facteurs_risque[$facteur_risque])) {
        $score_total += $facteurs_risques[$facteur_risque];
      }
    }
  
    return $score_total;
  }
  
  // Utilisation
  $symptomes_patient = array("fievre","essoufflement" ,"toux");
  $facteurs_risque_patient = array("age_sup_65","maladie_chronique");
  
  $score_total = evaluerPatient($symptomes_patient, $facteurs_risque_patient);
  
  echo "Score total : $score_total";
  
  if ($score_total > 10) {
    echo " Il est possible que le patient soit atteint de la COVID-19. Veuillez consulter un médecin pour un diagnostic confirmé.";
  } else {
    echo "Le risque de COVID-19 est faible, mais il est important de continuer à surveiller vos symptômes et de consulter un médecin si vous avez des inquiétudes.";
  }
  