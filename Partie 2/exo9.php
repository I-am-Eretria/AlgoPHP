<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<p>Exemple : <br>
afficherRadio($nomsRadio);</p>

<h2>Résultats:</h2>


<?php


$nomsRadio = ["Masculin", "Féminin","Autre"]; 

function afficherRadio(array $nomsRadio) : string {
    
    $result = "<form>";

    foreach($nomsRadio as $genre){
        $result .= "<div>
                    <input id='$genre' name='genre' type='radio' value='$genre'>  
                    <label for='$genre'>$genre</label>
                </div>";
    }

    $result .= "</form>";
    return $result;

}

echo afficherRadio($nomsRadio);


?> 