<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<p>Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG</p>

<h2>Résultats:</h2>


<?php

// $personne = [
//     "Mickaël" => "FRA",
//     "Virgile" => "ESP",
//     "Marie-Claire" => "ENG",
// ];

// foreach($personne as $prenom => $langue) {

//     if($langue == "FRA"){
//     echo "Salut $prenom <br>";}

//     elseif ($langue == "ESP"){
//     echo "Holà $prenom <br>";}

//     elseif ($langue == "ENG"){
//     echo "Hello $prenom <br>";}
    
// }

// echo "<br><h4>Variante : trier d’abord le tableau par ordre alphabétique du prénom</h4>";

// $personne = [
//     "Mickaël" => "FRA",
//     "Virgile" => "ESP",
//     "Marie-Claire" => "ENG",
// ];

// ksort($personne);

// foreach($personne as $prenom => $langue) {

//     if($langue == "FRA"){
//     echo "Salut $prenom <br>";}

//     elseif ($langue == "ESP"){
//     echo "Holà $prenom <br>";}

//     elseif ($langue == "ENG"){
//     echo "Hello $prenom <br>";}
    
// }








// $personne = [
//     "Mickaël" => "FRA",
//     "Virgile" => "ESP",
//     "Marie-Claire" => "ENG",
// ];

// $langues = [
//     "FRA" => "Salut",
//     "ESP" => "Holà",
//     "ENG" => "Hello",
// ];

// foreach($langues as $langue => $salutation) { 
//     foreach($personne as $prenom => $langue) {
//     }
//     echo "$salutation $prenom<br>";
// }


// deuxième tableau associatif avec langues et salutations + retirer if  



$prenom_langue = array("Micka"=>"FRA","Virgile"=>"ESP","MarieClaire"=>"ENG"); 

ksort($prenom_langue); //trier le tableau dans l'ordre alpha de la clé (k = key) 

foreach($prenom_langue as $prenom => $langue) { 
    direBonjour($prenom,$langue);
} 

function direBonjour($prenom, $langue){ 
switch($langue){ 
case "FRA" : echo "Salut ".$prenom."<br>" ; break; 
case "ESP" : echo "Hola ".$prenom."<br>" ; break; 
case "ENG" : echo "Hello ".$prenom."<br>" ; break;
default : echo "Langue non gérée pour ".$prenom;}}