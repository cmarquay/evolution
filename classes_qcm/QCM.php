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

/*

Cette classe contiendra (temporairement?) toutes les mÃ©thodes de crÃ©ation de questions.
Le tableau des appels sera shuffle et nbQuestions questions seront choisies

 */
class QCM
{
    
    private $_array_appels = array(0 => "question1", 1 => "question2", 2 => "question3", 3 => "question4",
        4 => "question5", 5 => "question6", 6 => "question7", 7 => "question8", 8 => "question9", 9 => "question10");
    
    private $_nbQuestions;
    private $_questionsPosees;
    private $_nbPoints;
    private $_questSuiv;
    
    public function __construct($nbquest, $diff)
    {
        shuffle($this->_array_appels);
        /*Le nombre de questions choisies ne peuvent pas dÃ©passer du tableau*/
        if ( $nbquest > count($this->_array_appels)) {
            $nbquest = count($this->_array_appels);
        }
        for ($i = 0; $i < $nbquest; $i++) {
            $func = $this->_array_appels[i];
            $params = call_user_func($func);
            $this->_questionsPosees[i] = new Question($params["enonce"],$params["bonne_rep"],$params["reponses"],$this);
        }
        $this->_questSuiv = 0;
        $this->_nbQuestions = $nbquest;
        $this->_nbPoints = 0;
    }
    
    public function nextQuestion()
    {
        if ($this->_questSuiv < $this->_nbQuestions) {
            return $this->_questionsPosees[$this->_questSuiv++];
        } else {
            return "Fin du Quiz";
        }
    }

    /*Si la fonction estLaBonneReponse de Question renvoie true, +1 point*/
    public function unPoint($bonneRep) {
        if ($bonneRep == true) {
            $this->_nbPoints++;
        }
        $this->nextQuestion();
    }
    
}

?>

