<?php

$prenom ="Reda";
$age = 78;

echo'Hello '.$prenom;

echo'<br>';
echo "as tu $age ans?" ;
echo'<br>';
echo'oui ';


// Structure conditionelles

// if else

if($age>=78){

    echo'vous etes trop ages';
}

elseif($age<3){

    echo'vous etes un bebe';
}
else{
    echo'on n en sait rien';
}
echo'<br>';


// switch case break

switch($age)
{
    case 3:
        echo'un bebe';
    break;
    case 78:
        case 89:
            echo'c\'est pas trop vieux';
        break;
}
echo'<br>';


// boucle while et 

$i =0;
while ($i < 10) {
  echo"i=$i <br>";
  $i++;}

  echo'<br>';


//boucle do while 

  $i=0;

do{

    echo "i2 = $i <br>";
    $i++;
}
while($i<10){


for($i=0;$i<10;$i++){

    echo"i3=$i <br>";
}
echo'<br>';

}
