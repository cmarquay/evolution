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
abstract class Personnage
{

    private $_vie;
    private $_nom;

    abstract public function affichageVie();

    abstract public function affichageNom();
    
    abstract public function estMort();
    
    abstract public function prendDegats($val);
    
    public function getVie()
    {
        return $this->_vie;
    }
    
    public function getNom()
    {
        return $this->_nom;
    }
    
    public function setVie($val)
    {
        $this->_vie = $val;
    }
    
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

}

?>
