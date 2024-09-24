<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.</p>

<p>Exemple : <br>
$elements = ["Monsieur","Madame","Mademoiselle"]; <br>
alimenterListeDeroulante($elements);</p>

<h2>Résultats:</h2>

<!-- 
<label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select> -->


<?php

$elements = ["Monsieur","Madame","Mademoiselle"]; 

function alimenterListeDeroulante($elements){
    
    $result = "<select name='civilité' id='liste_deroulante'>";

    foreach($elements as $valeur){
        $result .= "<option value='$valeur'>$valeur</option>";
    }

    $result .= "</select>";
    return $result;

}

echo alimenterListeDeroulante($elements);

?> 