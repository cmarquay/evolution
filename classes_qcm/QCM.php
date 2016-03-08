<?php
/*

Cette classe contiendra (temporairement?) toutes les méthodes de création de questions.
Le tableau des appels sera shuffle et nbQuestions questions seront choisies

 */
class QCM
{
    
    private $_array_appels = array(0 => "q0",1 => "q1", 2=> "q2");
    
    private $_nbQuestions;
    private $_questionsPosees;
    private $_nbPoints;
    private $_questActuelle;
    
    public function __construct($nbquest, $diff)
    {
        shuffle($this->_array_appels);
        /*Le nombre de questions chiosies ne peuvent pas dépasser du tableau*/
        if ( $nbquest > count($this->_array_appels)) {
            $nbquest = count($this->_array_appels);
        }
        for ($i = 0; $i < $nbquest; $i++) {
            $func = $this->_array_appels[i];
            $params = call_user_func($func);
            $this->_questionsPosees[i] = new Question($params["enonce"],$params["bonne_rep"],$params["reponses"]);
        }
        $this->_quest_actuelle = 0;
    }
    
    public function nextQuestion()
    {
        return $this->_questionsPosees[$this->_questActuelle++];
    }

    //renvoient des arrays : enonce, reponses, bonne reponse (en enonce bonne_rep et reponses)
    public function q0()
    {
        
    }
    
    public function q1()
    {
        
    }
    
    public function q2()
    {
        
    }
    
}

?>

