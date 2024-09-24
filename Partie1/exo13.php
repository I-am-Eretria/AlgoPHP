<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);


// AFFICHAGE


echo "Les notes obtenues par l’élève sont : [ ";
foreach ($notes as $note) {
    echo "$note ";
}
echo "]<br>";

echo "Sa moyenne générale est donc de : $moyenne";


?> 