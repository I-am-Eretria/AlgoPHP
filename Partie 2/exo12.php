<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable. </p>

<p>Soit le tableau suivant :  <br>
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]]; <br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Résultats:</h2>


<?php

$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];

foreach($tableauValeurs as $valeur) {
    var_dump($valeur);
    echo "<br>";
}

?> 