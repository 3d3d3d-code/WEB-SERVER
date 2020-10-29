<?php
//Exercice 12

$tableau = array('DEVOLDERE','CHATELOT','THIRY','ROCHE','LEROY');



function PremierElementTableau(array $tableau){

    if(empty($tableau)){
        return null;
    } 
    else
    {
        return $tableau[0];
    }
}

//Exercice 13

function DernierElementTableau($tableau){

    $index = count($tableau)-1;
    return $tableau[$index];



}
?>