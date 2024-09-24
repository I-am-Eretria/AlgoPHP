<h1>Exercice 7</h1>

<p>Écrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
Poussin : entre 6 et 7 ans<br>
Pupille : entre 8 et 9 ans<br>
Minime : entre 10 et 11 ans<br>
Cadet : à partir de 12 ans<br>
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultats:</h2>


<?php

// ------------------- VERSION 1 ----------------------


// DÉCLARATION DES VARIABLES

$age = 10;

// AFFICHAGE

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($age >= 12) {
        $resultat = "Cadet";
    } elseif($age >= 10) {
        $resultat = "Minime";
    } elseif ($age >= 8) {
        $resultat = "Pupille";
    } elseif ($age >= 6) {
        $resultat = "Poussin";
    }
    else {
        $resultat = "non-gérée";
    }
    
    echo "L'enfant qui a $age ans appartient à la catégorie « $resultat ».<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}


// ------------------- VERSION 2 ----------------------


// DÉCLARATION DES VARIABLES

$age = 10;

// AFFICHAGE

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    switch(true) {
        case $age >= 12: echo "L'enfant qui a $age ans appartient à la catégorie « Cadet ».<br>"; break;
        case $age >= 10: echo "L'enfant qui a $age ans appartient à la catégorie « Minime ».<br>"; break;
        case $age >= 8: echo "L'enfant qui a $age ans appartient à la catégorie « Pupille ».<br>"; break;
        case $age >= 6: echo "L'enfant qui a $age ans appartient à la catégorie « Poussin ».<br>"; break;
        default: echo "L'enfant qui a $age ans appartient à la catégorie « non-gérée ».<br>";
    }
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

?> 