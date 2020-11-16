<?php

// Correction

function concatenation(string $Argument1, string $Argument2)
{

  return  $Argument1.$Argument2 ;
}
$nom = concatenation('Mickael','Devoldere');
            
//Exercice 5

function concatenationV2($Argument1, $Argument2)
{
$Argument1 = mb_strtolower($Argument1);
$Argument2 = mb_convert_case($Argument2,MB_CASE_UPPER);  // toutes les premieres lettres passent en majuscule et les accents sont conserves. 

  return  strtolower($Argument1) . " " . strtoupper($Argument2);
}
echo concatenation('Mickael', 'Devoldere');













// Exercice 4





function concatenation($Argument1, $Argument2)
{

  return  $Argument1 . $Argument2;
}

//Exercice 5

function concatenationV2($Argument1, $Argument2)
{


  return  strtolower($Argument1) . " " . strtoupper($Argument2);
}
echo concatenation('Mickael', 'Devoldere');
