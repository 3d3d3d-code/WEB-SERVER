<?php
$maVar = ['DEVOLDERE', 'CHATELOT', 'THIRY', 'ROCHE', 'LEROY'];
$maVar = 'HAMZA'; // ajout de HAMZA a la fin du tableau
array_push($maVar, 'BROWN'); // meme chose pour BROWN
echo count($maVar); // nombre d'elements damns le tableau
echo "\n"; // separer les  elelements

echo reset($maVar); //1er element du tableau (et le dernier si il n y a qu un seul element bien sur)
echo "\n";
echo end($maVar); // dernier element du tableau


if (empty($maVar)) { // verifier si un tableau est vide

    return null;
}

echo "\n";

$roles = [
    205 => 'admin',
    112 => 'utilisateur'
];
var_export($roles);
echo "\n";





/**Exercice 12

$tableau = array('DEVOLDERE','CHATELOT','THIRY','ROCHE','LEROY');



function PremierElementTableau(array $tableau){
// toujours verifier que le tableau n est pas vide
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

