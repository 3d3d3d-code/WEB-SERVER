<?php

/**
 * Classe Voiture
 * 
 * cette classe represente une voiture
 * Exemple d'utilisation :
 * $voiture = new voiture('imat','marque','modele','poids')
 * 
 * @author Reda
 * @version 0.0.1
 * @copyright 2020 Reda
 * 
 */

class voiture
{
    protected $voiture_imat;
    protected $voiture_marque;
    protected $voiture_modele;
    protected $voiture_poids;

    /**
     * creation du constructeur
     *  */
    public function __construct(int $voiture_imat, string $voiture_marque, string $voiture_modele, float $voiture_poids)
    {
        $this->_voiture_imat = $voiture_imat;
        $this->_voiture_marque = $voiture_marque;
        $this->_voiture_modele = $voiture_modele;
        $this->_voiture_poids = $voiture_poids;
    }



    public function infoVoiture()
    {
    }
    /**
     * creattion des accesseurs (getter et setter)
     */

    // getter
    public function getVoitureNom($voiture_marque)
    {

        $this->_voiture_marque = $voiture_marque;
    }
    public function getVoitureModele($voiture_modele)
    {

        $this->_voiture_modele = $voiture_modele;
    }
    public function getVoiturePoids($voiture_poids)
    {

        $this->_voiture_poids = $voiture_poids;
    }


    //setter
    public function setVoitureMarque($voiture_marque)
    {
    }
    public function setVoitureModele($voiture_modele)
    {
    }
    public function setVoiturePoids($voiture_poids)
    {
    }

    public function VoitureVitesseMax(float $moteur_vitesse_max, float $voiture_poids)
    {

        $resultat = $moteur_vitesse_max - ($voiture_poids * 30 / 100);

        return $resultat;
    }
}
