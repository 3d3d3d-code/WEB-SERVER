


<?php
//Exercice 10


function EstMajeur(int $age)
{
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}
//Exercice 11

function CalculRetraite(int $age)
{
    $retraite = 60; 

    if ($age < 0) {

        return 'Vous n’êtes pas encore né';
    } elseif ($age === $retraite) {

        return 'Vous êtes à la retraite cette année';
    } elseif ($age < $retraite) {

        $age2 = $retraite - $age;
        return 'Il vous reste ' . $age2 . ' avant la retraite ';
    } else {

        $age2 = $age - $retraite;
        return 'Vous êtes à la retraite depuis ' . $age2 . ' ans ';
    }
}
