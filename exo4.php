<?php 

// Écrire un programme qui compte le nombre de voyelles dans une chaîne de caractères présente dans un tableau.
// ----Liste de voyelles --------------------------------


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
    
    echo "Le nombre de voyelle dans : .'$chaine': nmbrVoyelleChaine ".PHP_EOL;
    $nmbrTotalChaine += $nmbrVoyelleChaine;

    echo "le nombre de voyelles total est : '$nmbrTotalChaine' ".PHP_EOL;
}