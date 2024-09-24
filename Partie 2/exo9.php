<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<p>Exemple : <br>
afficherRadio($nomsRadio);</p>

<h2>Résultats:</h2>


<?php


$nomsRadio = ["Masculin", "Féminin","Autre"]; 

function afficherRadio($nomsRadio){
    
    $result = "<form>";

    foreach($nomsRadio as $valeur){
        $result .= "<div>
                    <input id='$valeur' type='radio'> 
                    <label for='$valeur' id=''>$valeur</label>
                </div>";
    }

    $result .= "</form>";
    return $result;

}

echo afficherRadio($nomsRadio);


?> 