<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$chaineDeCaracteres = "« Notre formation DL commence aujourd'hui »";
echo $chaineDeCaracteres."<br>";
$nbCaracteres = strlen($chaineDeCaracteres);


// AFFICHAGE ANCIENNE PHRASE

echo "La phrase $chaineDeCaracteres contient $nbCaracteres caractères."."<br>";


// DÉCLARATION VARIABLES - REMPLACEMENT MOT AUJOURD'HUI PAR DEMAIN

echo $chaineDeCaracteres2 = str_replace("aujourd'hui", "demain", $chaineDeCaracteres)."<br>";

// AFFICHAGE NOUVELLE PHRASE

echo "La phrase $chaineDeCaracteres2 contient $nbCaracteres caractères.";

?> 