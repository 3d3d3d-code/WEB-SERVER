<?php


//Exercice 6
$A1 = 5;
$A2 = 5;

function somme(int $A1, int $A2)
{
    return $A1 + $A2;
}


$A1 = 5;
$A2 = 3;

//Exercice 7
function soustraction(int $A1, int $A2)
{

    return  $A1 - $A2;
}
$A1 = 5;
$A2 = 3;

//Exercice 8
function multiplication(int $A1, int $A2)
{

    return  $A1 * $A2;
}
$A1 = 20;
$A2 = 3;
$Resultat4 = $A1 / $A2;

//Exercice 9
function division(int $A1, int $A2, float $Resultat4)
{
    if ($Resultat4 = 0) {

        return 0;
    } else {
        return number_format($A1 / $A2);
    }
}
