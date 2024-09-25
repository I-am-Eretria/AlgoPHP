<h1>Exercice 13</h1>

<p>Comme nous l’avons vu à l’exercice précédent, les var_dump() vont nous servir à débugger. Mais 
l’affichage peut-être un peu chaotique. Afin de l’améliorer nous allons utiliser un outil bien 
pratique : Xdebug</p>

<p>Installation Xdebug puis test de l'affichage.</p>

<h2>Résultats:</h2>


<?php

$array = ["Texte 1", "Texte 2", "Texte 3", 1000, 100.5, true, ["Texte 4", "Texte 5"]];
var_dump($array);

?> 