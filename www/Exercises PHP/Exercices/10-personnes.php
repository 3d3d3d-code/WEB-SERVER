


<?php
//Exercice 10
$age = 12;
$age = 18;
$age = 42;

function EstMajeur(int $age)
{
    if ($age >= 18) {

        return true;
    } else {


        return false;
    }

    //Exercice 11
    $age = 12;
    $age = 60;
    $age = 72;
    $age =-2 ;
    function CalculRetraite(int $age){

switch($age )
{


case($age=12):

    return 'il vous reste 48 ans avant la retraite';

break;
case($age=60):

    return 'Vous êtes à la retraite cette année';

break;
case($age=72):

    return 'Vous êtes à la retraite depuis 12 ans';

break;
case($age=-2):

    return 'Vous n’êtes pas encore né';

break;

default:

return 'Vous n etes pas sur la bonne planete';

   }
}






