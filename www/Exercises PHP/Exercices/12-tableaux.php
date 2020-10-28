<?php
//Exercice 12

$tableau = array('DEVOLDERE','CHATELOT','THIRY','ROCHE','LEROY');



function PremierElementTableau(){
if($tableau=[]){
return null;

}else{

return $tableau=[0];
}

//Exercice 13

function DernierElementTableau($tableau){
for ($i=0;$i <=count($tableau)-1;$i++)
    if($tableau=[]){
        return null;
        
        }else{
        
        return $tableau[$i-1];
        }


}

}
?>