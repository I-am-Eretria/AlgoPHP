<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>

<h2>Résultats:</h2>


<?php

// DÉCLARATION DES VARIABLES

$montantPayer = 152;
$sommeVersee = 200;
$restePayer1 =  $sommeVersee - $montantPayer;

$nbBillet10 = intdiv($restePayer1,10);
$restePayer2 = $restePayer1 - 10*$nbBillet10;

$nbBillet5 = intdiv($restePayer2,5);
$restePayer3 = $restePayer2 - 5*$nbBillet5;

$nbPiece2 = intdiv($restePayer3,2);
$restePayer4 = $restePayer3 - 2*$nbPiece2;

$nbPiece1 = intdiv($restePayer4,1);
$renduMonnaie = $restePayer4 - 1*$nbPiece1;

// AFFICHAGE

echo "Montant à payer : $montantPayer € <br>";
echo "Montant versé : $sommeVersee € <br>";
echo "Reste à payer : $restePayer1 € <br>";
echo "***************************************************<br>";
echo "Rendue de monnaie : <br>";
echo "$nbBillet10 billets de 10 € - $nbBillet5 billet de 5 € - $nbPiece2 pièce de 2 € - $nbPiece1 pièce de 1 €";


?> 