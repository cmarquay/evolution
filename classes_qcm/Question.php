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
    
    public function estLaBonneReponse($numero)
    {
        if ($numero == $this->_bonneReponse) {
            $res = true;
        } else {
            $res = false;
        }
        QCM::unPoint($res);
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
        </form>;";
        return $html;
        
        /*include les questions ici*/
        
    }
    
}

?>
