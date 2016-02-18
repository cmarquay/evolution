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
 * @author cbrillet
 */
class Monstre extends Personnage
{

    private $_image;
    private $_comp;

    public function __construct($nom, EnumCompetence $comp, $img)
    {
        $this->setVie(100);
        $this->setNom($nom);
        $this->_comp = new CompetenceMonstre(new Competence($comp));
        $this->_image = $img;
    }
    
    public function affichageVie()
    {
        return "" . $this->getVie();
    }

    public function affichageNom()
    {
        return $this->getNom();
    }

    public function getImage()
    {
        return $this->_image;
    }

    public function setImage($img)
    {
        $this->_image = $img;
    }

    public function estMort()
    {
        return ($this->getVie() <= 0);
    }

    public function prendDegats($val)
    {
        $this->setVie($this->getVie()-$val);
        return $this->getVie();
    }
    
    public function setCompetences(EnumCompetence $comp)
    {
        $this->_comp = new CompetenceMonstre(new Competence($comp));
    }
}

?>
