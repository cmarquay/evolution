<?php

class Question
{
    private $_enonce;
    private $_reponses;
    private $_bonneRep;

    public function __construct($enonce, $bonneRep, $reponses)
    {
        $this->_enonce = $enonce;
        $this->_reponses = $reponses;
        $this->_bonneRep = $bonneRep;
    }
    
    public function prendReponse()
    {
        /*Réponse entrée par l'utilisateur : renvoie 0 1 2 ou 3*/
        return 0;
    }
    
    public function estLaBonneReponse()
    {
        /*Appelle prendReponse*/
        return ($this->prendReponse() == $this->_bonneReponse);
    }
    
    public function affiche()
    {
        $str=$enonce."\n";
        for ($i = 0; $i < count($this->_reponses); $i++) {
            $str.= "- ".$this->_reponses[i]."\n";
        }
    }
    
}

?>
