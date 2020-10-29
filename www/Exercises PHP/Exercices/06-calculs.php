<?php


//Exercice 6


function somme(int $A1, int $A2)
{
    return $A1 + $A2;
}





//Exercice 7
function soustraction(int $A1, int $A2)
{

    return  $A1 - $A2;
}


//Exercice 8

function multiplication(int $A1, int $A2)
{

    return  $A1 * $A2;
}



//Exercice 9
function division(int $A1, int $A2)
{
    if ($A2 === 0) {

        return 0;
    } else {
        return number_format($A1 / $A2,2);
    }
}


