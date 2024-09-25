<h1>Exercice 5</h1>

<p>Créer  une  fonction  personnalisée  permettant  de  créer  un  formulaire  de  champs  de  texte  en 
précisant le nom des champs associés.</p>

<p>Exemple : <br>
$nomsInput = ["Nom","Prénom","Ville"]; <br>
afficherInput($nomsInput);</p>

<h2>Résultats:</h2>

<!-- 
<form>
    <div>
        <label for="nom" id="nom">Nom</label> <br>
        <input id="nom" type="text">
    </div>
    <div>
        <label for="prenom" id="prénom">Prénom</label> <br>
        <input id="prénom" type="text"> 
    </div>
    <div>
        <label for="ville" id="ville">Ville</label> <br>
        <input id="ville" type="text"> 
    </div>
</form> -->

<?php

$nomsInput = ["Nom","Prénom","Ville"]; 

function afficherInput(array $nomsInput) : string {

    $result = "<form>
                <div>";

    foreach($nomsInput as $info){
        $result .= "<div>
                        <label for='$info' id='$info'>$info</label> <br>
                        <input name='$info' id='$info' type='text'>
                    </div>";
    }

    $result .= "</form> </div>";
    return $result;
}

echo afficherInput($nomsInput);

?> 