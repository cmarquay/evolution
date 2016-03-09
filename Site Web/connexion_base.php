<?php
    $connexion=connexionPDO("localhost","root","","bddevolution");

    function connexionPDO($hote,$username,$mdp,$bd) {
        try {
            $connex= new PDO('mysql:host='.$hote.';dbname='.$bd, $username, $mdp);
            $connex->exec("SET CHARACTER SET utf8"); //Gestion des accents
            return $connex;
        } catch(Exception $e) {
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
            return null;
        }
    }
?>