<h1>Exercice 8</h1>

<p>Écrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>
<p> Affichage (pour la table de 8) :
    Table de 8 : <br>
    1 x 8 = 8    <br>
    2 x 8 = 16   <br>
    3 x 8 = 24 … 
</p>

<p>Remarque : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultats:</h2>


<?php

$nombre = 8;

// FOR (pour)

echo "<h4>FOR (pour)</h4>";
echo "<p>Table de $nombre: </p>";

for($i = 1; $i <= 10; $i++) {
    $multiplication = $i * $nombre;
    echo "$i x $nombre = $multiplication <br>"; 
}


echo "<br>";


// WHILE (tant que)

echo "<h4>WHILE (tant que)</h4>";
echo "<p>Table de $nombre: </p>";

$t = 1;
while($t <= 10) {
    $multiplication = $t * $nombre;
    echo "$t x $nombre = $multiplication <br>";
    $t++;
}


echo "<br>";


// FOREACH

echo "<h4>FOREACH</h4>";
echo "<p>Table de $nombre: </p>";

$range = range(1,10); // crée un tableau de 1 à 10

foreach(range(1,10) as $t2) { 
    $multiplication = $t2 * $nombre;
    echo "$t2 x $nombre = $multiplication <br>"; 
}

?> 