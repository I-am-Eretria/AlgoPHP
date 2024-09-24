<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de
son sexe. Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou 
si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas
le cas, « non imposable »).</p>


<h2>Résultats:</h2>


<?php


$genre = "F";
$age = 32;

echo "Âge : $age ans <br>";
echo "Genre : $genre <br>";

if( ($genre == "F" && $age>18 && $age<35) || ($genre == "H" && $age>20) ) {
    echo "La personne est imposable.";
} else {
    echo "La personne est non imposable.";
}

?> 

<!-- 
F  18 < âge < 35  imposable
H  âge > 20      imposable
sinon            non imposable
 -->