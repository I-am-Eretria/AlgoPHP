<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran. </p>

<p>Exemple : <br>
repeterImage($url,4);</p>

<h2>Résultats:</h2>


<?php

// $url = "<img src='http://my.mobirise.com/data/userpic/764.jpg'></img>";

// function repeterImage(string $url, int $nbRepetitions){
//     $resultat = "";
//     foreach(range(1, $nbRepetitions) as $valeur) {
//         $resultat .= $url.$nbRepetitions;
//     }
//     return $resultat;
// }

// echo repeterImage($url,4);


// echo str_repeat($url,4);


$url = 'http://my.mobirise.com/data/userpic/764.jpg';

function repeterImage(string $url, int $nbRepetitions) : string {
    $resultat = "";
    foreach(range(1, $nbRepetitions) as $valeur) {
        $resultat .= "<img src='$url'.$nbRepetitions></img>";
    }
    return $resultat;
}

echo repeterImage($url,4);
 
?> 