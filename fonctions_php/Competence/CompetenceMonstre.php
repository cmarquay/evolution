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
class CompetenceMonstre
{

    private $_competence;

    public function __construct($competence)
    {
        $this->_competence = $competence;
    }
    /*
     * manque code !!
     */

    public function toString()
    {
        $retour .= $this->_competence->description() . " lvl " . $this->_competence->donneNiveau() . " xp " . $this->_competence->donneExperience() . " total " . $this->_competence->donneExperienceMax() . "\n";
        return $retour;
    }
}

?>
