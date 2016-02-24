<?php
/*
 * CC BY Project Brevet Evolution.
 *
 * Copyright CC BY 2016.
 * Brillet Camille.
 * Fillon Aurélien.
 * Foissac Nicola.
 * Hanotel Guillaume.
 * Henry-Brûlé Raphaël.
 * Marquay Christian.
 *
 * Creative Commons Attribution 3.0 France.
 * http://creativecommons.org/licenses/by/3.0/fr/legalcode
 *
 */

/**
 *
 * @author nfoissac
 * @author cbrillet
 */

// refontes des $competence 
// ajout gestion statistique : xp et cometences !
class Competence
{
    
    //La description correspond � la valeur du tableau associatif
    public static $enum = array(
    "Aires"=>"Aires",
    "CalculsElementaires"=>"Calculs élémentaires sur les radicaux",
    "ChangementDunites"=>"changement d’unités",
    "Configurations"=>"Configurations dans l’espace",
    "EcrituresLitterales"=>"Écritures littérales",
    "Equations"=>"Équations du premier degré",
    "FiguresPlanes"=>"Figures planes",
    "FonctionLineaire"=>"Fonction linéaire",
    "Grandeurs"=>"Grandeurs composées",
    "Inequations"=>"Inéquations du premier degré",
    "NombresEntiers"=>"Nombres entiers",
    "NombresRationnels"=>"Nombres rationnels",
    "NotionDeFonction"=>"Notion de fonction",
    "NotionDeProbabilite"=>"Notion de probabilité",
    "Statistique"=>"Statistique",
    "Volumes"=>"Volumes",
    );
    
    private $_competence;
    private $_niveau;
    private $_experience;
    private $_experienceMax;

    public function __construct($competence)
    {
        $this->_competence = $competence;
        $this->_niveau = 0;
        $this->_experience = 0;
        $this->_experienceMax = 100;
    }

    public function description()
    {
        return $this->_competence;
    }

    public function donneNiveau()
    {
        return $this->_niveau;
    }

    public function donneExperience()
    {
        return $this->_experience;
    }

    public function donneExperienceMax()
    {
        return $this->_experienceMax;
    }

    public function ajouteExperience($nombre)
    {
        $this->_experience += $nombre;
        Statistique::StatistiqueExperience($nombre);
    }

    private function definitExperienceNull()
    {
        $this->_experience = 0;
    }

    private function definitExperienceMax()
    {
        $this->_experienceMax = (int) ($this->donneExperienceMax() * 0.03) + $this->donneNiveau() + $this->donneExperienceMax();
    }

    private function definitNiveauSuperieur()
    {
        $this->_niveau += 1;
        Statistique::StatistiqueCompetence();
    }

    public function peutMonter()
    {

        if (donneExperience() >= donneExperienceMax())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function gainNiveau()
    {
        $this->definitNiveauSuperieur();
        $this->definitExperienceNull();
        $this->definitExperienceMax();
    }
}

?>
