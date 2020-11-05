<?php
// Exercice 3



function dateDuJour()
{

    $date = new DateTime();

    $result = $date->format('d-m-Y');
    echo $result;
    return $result;
}
$date = dateDuJour();
// attention le return arrete la fonction donc a mettre a la fin
