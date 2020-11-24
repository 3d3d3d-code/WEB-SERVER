<?php



class VoitureDeCourse extends voiture
{
    protected $id;
    protected $voiture_Course_Marque;

    public function __construct(int $id,string  $voiture_Course_Marque)
    {
        $this->_id=$id;
        $this->_voiture_Course_Marque   = $voiture_Course_Marque;
    }



    public function VoitureVitesseMax(float $moteur_vitesse_max,float $voiture_poids){

        $resultat2 = $moteur_vitesse_max - ($voiture_poids * 5/100);

        return $resultat2;
    }


















}
