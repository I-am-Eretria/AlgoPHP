<h1>Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir 
dans un nouvel onglet (_blank).</p>
<p></p>

<h2>Résultats:</h2>



<?php

$url = "https://elan-formation.fr/accueil";
$elan = "Elan Formation";
$target = "_blank";

echo "<a href=$url target=$target>$elan</a>";

?> 