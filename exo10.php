<?php

//Exercise nº 10
//Développer un programme pour déterminer si un patient est atteint de la COVID-19 implique généralement la vérification de certains symptômes ou facteurs de risque. 


//Les symptomes de la COVID
// $symptomes = array(
//         "fievre" => 5,
//         "toux" => 4,
//         "essoufflement" => 6,
//         "fatigue" => 3,
//         "perte_gout_odorat" => 2,

// );

// // les facteur de risque 
// $facteurs_de_risques = array(
//     "age_sup_65 "=> 3,
//     "maladie_chronique"=> 2,
//     "voyage_zone_risque"=> 1,
// );

// //La fonction qui nous permet de faire le teste du COVID 

// function evaluationPatient($symptome_patient, $facteurs_de_risques_patient){
//     global $facteurs_de_risques;
//     global $symptomes;
//     global $facteurs_de_risques_patient;
//     $score_evaluation = 0;

//     foreach ( $symptome_patient as $symptome){
//         if(isset($symptomes[$symptome])){
//             $score_evaluation += $symptomes[$symptome];
//         }
//     };
//     foreach($facteurs_de_risques_patient as $facteur_de_risque){
//         if(isset($facteurs_de_risques_patient[$facteur_de_risque])){
//             $score_evaluation += $facteurs_de_risques_patient[$facteur_de_risque];
//         }
//     };
//     return $score_evaluation;
    
// }

// $symptomes_patient = array("fievre", "toux");
// $facteurs_risque_patient = array("age_sup_65");

// $evaluation_total = evaluationPatient($symptomes_patient, $facteur_de_risques_patient);
// echo $evaluation_total;


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
  
  // Exemple d'utilisation
  $symptomes_patient = array("fievre", "toux");
  $facteurs_risque_patient = array("age_sup_65");
  
  $score_total = evaluerPatient($symptomes_patient, $facteurs_risque_patient);
  
  echo "Score total : $score_total";
  
  if ($score_total > 10) {
    echo "Il est possible que le patient soit atteint de la COVID-19. Veuillez consulter un médecin pour un diagnostic confirmé.";
  } else {
    echo "Le risque de COVID-19 est faible, mais il est important de continuer à surveiller vos symptômes et de consulter un médecin si vous avez des inquiétudes.";
  }
  