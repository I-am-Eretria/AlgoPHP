<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<p>Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$marques = ["Peugeot", "Renault", "BMW", "Mercedes",];
$nbMarque = count($marques);


// AFFICHAGE

echo "Il y a $nbMarque marques de voitures dans le tableau :<br>";
foreach ($marques as $marque) {
    echo "$marque <br>";
}

?> 
