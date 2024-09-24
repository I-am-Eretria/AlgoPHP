<h1>Exercice 5</h1>

<p>Écrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.</p> 
<p>Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$prixFrancs = 321;
$tauxConvertion = 0.1524;

$prixEuro = $prixFrancs * $tauxConvertion;
$prixEuroArr = round($prixEuro, 2, PHP_ROUND_HALF_UP);

// AFFICHAGE

echo "Montant en francs : $prixFrancs "."<br>";
echo "$prixFrancs francs = $prixEuroArr €";

?> 