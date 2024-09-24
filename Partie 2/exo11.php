<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>

<p>Exemple : <br>
formaterDateFr("2018-02-23");</p>

<h2>Résultats:</h2>


<?php

// function formaterDateFr("2018-02-23"){}



$nombre = 25;
$nf = new NumberFormatter('fr', NumberFormatter::SPELLOUT);
echo $nf->format($nombre);



// echo formaterDateFr("2018-02-23");

?> 