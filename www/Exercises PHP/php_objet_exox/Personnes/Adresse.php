<?php 


class Adresse 


{
//numero
private $numero;
//rue
private $rue;
//code postal
private $codePostal;
//commune
private $commune;


    public function __construct(int $numero,string $rue,int $codePostal,string $commune)
    {
        $this->_numero=$numero;
        $this->_rue=$rue;
        $this->_codepostal=$codePostal;
        $this->_commune=$commune;
    }
}