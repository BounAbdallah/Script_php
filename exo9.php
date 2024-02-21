<?php
$chaine = "Bonjour Simplon !";
$frequences = array();

for ($i = 0; $i < strlen($chaine); $i++) {
  $caractere = $chaine[$i];
  if (!isset($frequences[$caractere])) {
    $frequences[$caractere] = 0;
  }
  $frequences[$caractere]++;
}

// Affichage frequences
foreach ($frequences as $caractere => $frequence) {
  echo "Le caractère '$caractere' apparait $frequence fois." . PHP_EOL;
}

