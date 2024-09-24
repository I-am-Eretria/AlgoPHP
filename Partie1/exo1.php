<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».</p>
<p>Écrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$chaineDeCaracteres = "« Notre formation DL commence aujourd'hui »";
echo $chaineDeCaracteres."<br>";
$nbCaracteres = strlen($chaineDeCaracteres);

// AFFICHAGE

echo "La phrase $chaineDeCaracteres contient $nbCaracteres caractères.";

?> 
