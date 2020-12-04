<?php
class VoitureCourse extends Voiture

{

/**
 * 
 * 
 * 
 * 
 */
public function __construct(string $marque, string $modele, int $poids,Moteur $moteur,int $vitesseMax )
{

    
    parent :: __construct($marque,$modele,$poids,$moteur,$vitesseMax);

    if ($this->marque  !== $this->moteur->getMarque()){

        throw new Exception('les marques voiture et moteur sont differents .');
    }


}


public function getVitesseMax() : int {

return $this->moteur 
    }








   
}

