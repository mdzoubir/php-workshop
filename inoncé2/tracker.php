<?php 
$name = 'N1';
$weightKg = 86;
$heightCm =140;

$heightM = $heightCm / 100 ;
$heightMm = pow($heightM, 2);

// echo "la hauteur au métre $heightM m <br>";
// echo "la hauteur au métre au carré $heightMm m² <br>";
$valeur_IMC = $weightKg / $heightMm;
// echo " votre IMC $valeur_IMC <br>";

echo "bonjour $name votre IMC et $valeur_IMC";


?>





<?php

function CalculerImc($name,$weightKg,$heightCm){ // fonction pour calculer IMC d'un utilisateur

$IMC = $weightKg / ($heightCm*$heightCm/10000);
$message = "Bonjour $name , votre IMC est $IMC";
return $message;
}
$message = CalculerImc("imad",48,158);

echo $message;