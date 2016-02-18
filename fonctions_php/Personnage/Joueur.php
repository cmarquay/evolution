<?php
/**
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
 * @version 0.1 changement sur les attribut ! prototypage competance et
 * statiqique !
 * @author cbrillet
 * @author nfoissac
 */
class Joueur extends Personnage 
{
    private $_comp;

    public function __construct($nom)
    {
        $this->setVie(100);
        $this->setNom($nom);
        $this->_comp = new CompetenceJoueur;
    }

    public function affichageVie()
    {
        return "" . $this->getVie();
    }

    public function affichageNom()
    {
        return $this->getNom();
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

    public function setCompetences(CompetenceJoueur $comp)
    {
        $this->_comp = $comp;
    }
}
?>
