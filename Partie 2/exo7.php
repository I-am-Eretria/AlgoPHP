<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.</p>

<p>Exemple : <br>
genererCheckbox($elements); <br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Résultats:</h2>

<!-- 
<form>
    <div>
        <input id="nom" type="checkbox">
        <label for="nom" id="nom">Choix 1</label>
    </div>
    <div>
        <input id="prénom" type="checkbox"> 
        <label for="prenom" id="prénom">Choix 2</label>
    </div>
    <div>
        <input id="ville" type="checkbox"> 
        <label for="ville" id="ville">Choix 3</label>
    </div>
</form> -->


<?php

$elements = [
    "Choix 1" => "non-cochée",
    "Choix 2" => "cochée",
    "Choix 3" => "non-cochée"
]; 

function genererCheckbox($elements){
    
    $result = "<form>";

    foreach($elements as $clef => $valeur){
        if($valeur == "non-cochée"){
            $input = "<input id='$clef' type='checkbox'>";
        }
        elseif($valeur == "cochée"){
            $input = "<input id='$clef' type='checkbox' checked>";
        }

    $result .= "<div>
                    $input 
                    <label for='$clef' id=''>$clef</label>
                </div>";
    }

    $result .= "</form>";
    return $result;

}

echo genererCheckbox($elements);

?> 