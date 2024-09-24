<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <br>

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];</p>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.</p>

<p>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);  </p>

<h2>Résultats:</h2>

<!-- 
Tableau HTML

<table border=1>

  Entête du tableau
  <thead>
    <tr>
      <th>Pays</th>
      <th>Capitale</th>
    </tr>
  </thead>

  Corps du tableau
  <tbody>
    <tr>
      <td>Allemagne</td>
      <td>Berlin</td>
    </tr>
    <tr>
      <td>France</td>
      <td>Paris</td>
      si 10 td, faire td*10 et valider pour aller plus rapidement
    </tr>
    <tr>
      <td>Italie</td>
      <td>Rome</td>
    </tr>
    <tr>
      <td>USA</td>
      <td>Whashington</td>
    </tr>
  </tbody>

</table> 
-->

<?php

$capitales = [
  "France"=>"paris",
  "Allemagne"=>"berlin",
  "USA"=>"washington",
  "Italie"=>"rome"
];

foreach($capitales as $pays => $capitale){
  echo "Le pays $pays a pour capitale: $capitale.<br>";
}

function afficherTableHTML($capitales){ 

  ksort($capitales); // trier le tableau dans l'ordre alphabétique (de A à  Z) sur la clef

  $result = "<table border=1>
                <thead>
                  <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                  </tr>
                </thead>
                <tbody>";

  foreach($capitales as $pays => $capitale){
    $result .=  "<tr>
                  <td>".mb_strtoupper($pays)."</td>
                  <td>".ucfirst($capitale)."</td>
                </tr>";
    /* $result = $result + ...
      Si valeur numérique 
        $result += 2   ($result = $result + 2)
      Si valeur chaine de caractères
        $result .= ChaineDeCaracteres   ($result = $result + ChaineDeCaracteres)
      . pour concanétation
    */
  }

  $result .= "</tbody> </table>";
  return $result;
}

echo afficherTableHTML($capitales);




