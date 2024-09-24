<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$chaineDeCaracteres = "« Notre formation DL commence aujourd'hui »";
echo $chaineDeCaracteres."<br>";
$nbMots = str_word_count($chaineDeCaracteres);

// AFFICHAGE

echo "La phrase $chaineDeCaracteres contient $nbMots mots.";

?> 
