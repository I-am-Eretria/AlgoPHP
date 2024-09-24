<h1>Exercice 4</h1>

<p>Écrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$phrase = "Engage le jeu que je le gagne";
echo $phrase."<br>";

$chaineDeCaracteresMinus = mb_strtolower($phrase);  //fonction pour mettre en minuscules tous les caractères

$chaineDeCaracteres = trim($chaineDeCaracteresMinus);  //fonction pour supprimer les espaces

$chaineDeCaracteres2 = strrev($chaineDeCaracteres)."<br>";   //fonction pour inverser les lettres d'une chaine de caractères

// AFFICHAGE

if ($chaineDeCaracteres = $chaineDeCaracteres2) {
    echo "La phrase « $phrase » est un palindrome.";
} else {
    echo "La phrase « $phrase » n'est pas un palindrome.";
}

?> 