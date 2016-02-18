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
class CompetenceJoueur
{

    private $_competences;

    public function __construct()
    {
        $this->_competences = array();
        foreach (array_keys(Competence::$enum) as $competence)
        {
            ajoutCompetence(new Competence($competence));
        }
    }

    private function donneCompetences()
    {
        return $this->_competences;
    }

    private function ajoutCompetence($competence)
    {
        array_push($this->_competences,$competence);
    }

    public function donneCompetence($numero_competence)
    {
        return donneCompetences()[$numero_competence];
    }

    public function toString()
    {
        $retour = "";
        foreach (array_keys($this->_competences) as $competence)
        {
            $retour .= $competence->description() . " lvl " . $competence->donneNiveau() . " xp " . $competence->donneExperience() . " total " . $competence->donneExperienceMax() . "\n";
        }
        return retour;
    }
}

?>
