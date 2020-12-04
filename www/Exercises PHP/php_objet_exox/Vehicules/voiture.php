


<?php










/** Classe Voiture
 * 
 * cette classe represente une voiture
 * Exemple d'utilisation :
 * $voiture = new voiture('imat','marque','modele','poids')
 * 
 * @author Reda
 * @version 0.0.1
 * @copyright 2020 Reda
 */

require Moteur;
class voiture
{

    protected  string $marque;
    protected  string $modele;
    protected int  $poids;
    protected  Moteur $moteur;
    /**
     * creation du constructeur
     *  */
    public function __construct(string $marque, string $modele, int $poids)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setPoids($poids);
        $this->setMoteur = ($moteur);
    }

    #GETTER 

    public function getMarque(): string
    {

        return $this->marque;
    }



    public function getModele(): string
    {

        return $this->modeleVoiture;
    }

    public function getPoids(): ?int
    {
        return $this->poids ?? null;
    }


    #SETTER

    public function setModele(string $modele)
    {
        if (empty($modele)) {

            $this->modele = 'ce modele n existe pas';
        } else {
            $this->modele = $modele;
        }
    }
    public function setMarque(string $marque)
    {
        if (empty($marque)) {
            $this->marque = 'cette marque n existe pas';
        } else {

            $this->marque = $marque;
        }
    }

    public function setPoids(int $poids)
    {

        if (empty($poids)) {

            $this->poids = 'poids inconnu';
        } else {
            $this->poids = $poids;
        }
    }
        public function setMoteur(string $moteur){

           
           
                $this->moteur = $moteur;
            }
        }


    #methode

    public function getInfo()
    {

        return "$this->marque : $this->modele  : $this->poids";
    }

    public function vitesseMaxVoiture(int $vitesseMax, int $poids)
    {

        $resultat = $vitesseMax - ($poids * 30 / 100);
        return $resultat;
    }
}
