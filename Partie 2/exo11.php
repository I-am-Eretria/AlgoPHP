<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>

<p>Exemple : <br>
formaterDateFr("2018-02-23");</p>

<h2>Résultats:</h2>


<?php

function formaterDateFr(string $date) : string {

    $dateTrans = new DateTime($date);

    $fmt = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,                                    // Date format, ici full
        IntlDateFormatter::NONE,                                    // Heure, ici none donc pas affichée
        'Europe/Paris',                                             // Fuseau Horaire
        IntlDateFormatter::GREGORIAN                                // Calendrier grégorien, pour non grégorien : TRADITIONAL
    );

    return $fmt->format($dateTrans);
}

echo formaterDateFr("2018-02-23");


?> 