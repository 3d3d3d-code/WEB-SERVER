<?php


class Moteur

{

private $moteur;
private $vitesseMax;


public function  __construct(string $moteur,int $vitesseMax){
    $this->setMoteur($moteur);
    $this->setVitesseMax($vitesseMax);
   
}

#getter
public function getMoteur(): string
    {

return $this->moteur;

}
public function getVitesseMax():int

{
    return $this->vitesseMax;
}

#setter

public function setMoteur(string $moteur){

    if(empty($moteur)){

        $this->moteur = 'moteur inconnu';
    }else
    {
        $this->moteur=$moteur;
    }
}
    public function setVitesseMax(string $vitesseMax){

        if(empty($vitesseMax)){
    
            $this->vitesseMax = 'vitessse max non identifiee';
        }else
        {
            $this->vitesseMax=$vitesseMax;
        }
    
}
    



}


























