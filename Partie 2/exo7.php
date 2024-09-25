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


//Version 1

/*
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
*/



//Version 2

/*
$elements = [
    "Choix 1" => "",           // non coché
    "Choix 2" => "checked",    // coché
    "Choix 3" => ""            // non coché
]; 

function genererCheckbox($elements) {
    $result = "<form>";

    foreach($elements as $choice => $checked) {
        $checkedAttribute = $valeur === "checked" ? 'checked' : '';     //=== : C'est l'opérateur de comparaison stricte. Il vérifie à la fois la valeur et le type. Donc, cette condition est vraie uniquement si $valeur est exactement la chaîne "checked".
        $result .= "
            <div>
                <input id='$choice' type='checkbox' $checkedAttribute>
                <label for='$choice'>$choice</label>
            </div>";
    }

    $result .= "</form>";
    return $result;
}

echo genererCheckbox($elements);
*/

/* Explications -> $checkedAttribute = $valeur === "checked" ? 'checked' : '';

L'opérateur ternaire est une façon concise d'écrire une instruction if qui affecte une valeur à une variable en fonction d'une condition.
La syntaxe générale est : condition ? valeur_si_vrai : valeur_si_faux.
Dans notre cas, si la condition $valeur === "checked" est vraie, alors $checkedAttribute recevra la valeur 'checked'. Sinon, il recevra une chaîne vide ''.
*/



//Version 3

$elements = [
    "Choix 1" => "",           // non coché
    "Choix 2" => "checked",    // coché
    "Choix 3" => ""            // non coché
]; 

function genererCheckbox(array $elements) : string {
    $result = "<form>";

    foreach($elements as $choice => $checked) {
        $result .= "
            <div>
                <input id='$choice' type='checkbox' $checked>
                <label for='$choice'>$choice</label>
            </div>";
    }

    $result .= "</form>";
    return $result;
}

echo genererCheckbox($elements);

?> 