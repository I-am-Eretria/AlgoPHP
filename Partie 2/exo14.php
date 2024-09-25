<h1>Exercice 14</h1>

<p>En  utilisant  les  ressources  de  la  page  http://php.net/manual/fr/book.filter.php,  vérifier  si  une 
adresse e-mail a le bon format. </p>

<h2>Résultats:</h2>


<?php

$email = 'elan@elan-formation.fr';
// $email = 'contact@elan';


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est considérée comme valide.";
} else {
    echo "L'adresse email '$email' est considérée comme invalide.";
}

?> 