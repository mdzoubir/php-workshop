<?php 
$name = 'imad';
$weightKg = 48;
$heightCm =158;
$heightM = $heightCm / 100;
$heightMm = pow($heightM, 2);

// echo "la hauteur au métre $heightM m <br>";
// echo "la hauteur au carré $heightMm m² <br>";
$valeur_IMC = $weightKg / $heightMm;
// echo " votre IMC $valeur_IMC <br>";

echo "Bonjour $name, votre IMC et $valeur_IMC";


?>

<?php
echo "<br>";
function CalculerIMC($name,$weightKg,$heightCm){ 
    $heightM = $heightCm / 100 ;
    $heightMm = pow($heightM, 2);
    $valeur_IMC = $weightKg / $heightMm;

echo  "Bonjour $name , votre IMC est $valeur_IMC";
}
CalculerIMC("imad",48,158);

