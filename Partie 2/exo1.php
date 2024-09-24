<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.</p>

<p>Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Résultats:</h2>


<?php

$texte = "Mon texte en paramètre";

function convertirMajRouge($texte) : string {
    $texteMAJ = mb_strtoupper($texte);
    $texte = "<font color='#FF0000'>$texteMAJ</font>";
    return $texte;
}  

if($texte == "Mon texte en paramètre") {
    echo convertirMajRouge($texte);
    } else { echo $texte; 
}

?> 