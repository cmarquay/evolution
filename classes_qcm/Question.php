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

class Question
{
    private $_enonce;
    private $_reponses;
    private $_bonneRep;
    private $_QCM;

    public function __construct($enonce, $bonneRep, $reponses, QCM $qcm)
    {
        $this->_enonce = $enonce;
        $this->_reponses = $reponses;
        $this->_bonneRep = $bonneRep;
        $this->_QCM = $qcm;
    }
    
    public function estLaBonneReponse($numero)
    {
        if ($numero == $this->_bonneReponse) {
            $res = true;
        } else {
            $res = false;
        }
        $this->_QCM->unPoint($res);
    }
    
    public function traitement($numero) {
        if($_GET){
            if(isset($_GET['traitement'])) {
                $this->estLaBonneReponse($numero);
            }
        }
    }
    
    public function affiche()
    {
        $html = "<form action='Question.php'>
            <input type='text' name='txt' />
            <input type='submit' name='traitement' value=".$this->_reponses[0]." onclick='traitement(0)' />
            <input type='submit' name='traitement' value=".$this->_reponses[1]." onclick='traitement(1)' />
            <input type='submit' name='traitement' value=".$this->_reponses[2]." onclick='traitement(2)' />
            <input type='submit' name='traitement' value=".$this->_reponses[3]." onclick='traitement(3)' />
        </form>";
        return $html;
        
    }
    
}

?>
