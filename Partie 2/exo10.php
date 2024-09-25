<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet  qui  contient  les  informations  suivantes :  champs  de  texte avec  nom,  prénom,  adresse  e-
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</p>

<p>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultats:</h2>


<?php

//Partie nom,  prénom,  adresse  e-mail, ville

$infosInput = ["Nom","Prénom","Adresse e-mail","Ville"]; 

function afficherInput(array $infosInput) : string {

    $result = "<div>";

    foreach($infosInput as $info){
        $result .= "<div>
                        <label for='$info' id='$info'>$info</label> <br>
                        <input id='$info' type='text'>
                    </div><br>";
    }

    $result .= "</div>";
    return $result;
}


//Partie Genre 

$genres = ["Féminin","Masculin","Autre"]; 

function ListeGenres(array $genres) : string {
    
    $result = " <label for='genres'>Genre</label>
                <select name='genres' id=''>";

    foreach($genres as $genre){
        $result .= "<option value='$genre'>$genre</option>";
    }

    $result .= "</select> <br>";
    return $result;

}


// Partie liste de choix intitulés de formation

$formations = ["Développeur Logiciel","Designer web","Intégrateur","Chef de projet"]; 

function ListeFormations(array $formations) : string {
    
    $result = " <br><label for='formations'>Intitulé de formation</label>
                <select name='formations' id=''>";

    foreach($formations as $formation){
        $result .= "<option value='$formation'>$formation</option>";
    }

    $result .= "</select><br>";
    return $result;

}


// Formulaire

function afficherFormulaire(array $infosInput, array $genres, array $formations) : string {
    $result = "<form action ='action.php' method='post'>";
    $result .= afficherInput($infosInput);
    $result .=  ListeGenres($genres);
    $result .=  ListeFormations($formations);
    $result .=  "<button type='submit'>Envoyer</button>";
    $result .=  "</form>";
    ;
    return $result;
}

echo afficherFormulaire($infosInput, $genres, $formations);

?> 