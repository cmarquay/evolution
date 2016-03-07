<?php
    function VerifierAdresseMail($adresse) {
        $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
        if(preg_match($Syntaxe,$adresse)) {
            return true;
        } else {
            return false;
        }
    }

    function MailDansBase($email) {
        $sql = "SELECT * FROM individu WHERE Email='$email'";
        $resultat = connexionPDO("localhost","root","","bddevolution")->query($sql);
        $info = $resultat->fetchAll(PDO::FETCH_ASSOC);
        if($info!=null) {
            return true;
        } else {
            return false;
        }
    }
?>