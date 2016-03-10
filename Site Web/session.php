<?php
    session_start();
    if(isset($_SESSION["Pseudo"]) && isset($_SESSION["Nom"]) && isset($_SESSION["Prenom"]) && isset($_SESSION["Avatar"]) && isset($_SESSION["Aires"]) && isset($_SESSION["CalculsElementaires"]) && isset($_SESSION["ChangementDunites"]) && isset($_SESSION["Configurations"]) && isset($_SESSION["EcrituresLitterales"]) && isset($_SESSION["Equations"]) && isset($_SESSION["FonctionLineaire"]) && isset($_SESSION["Grandeurs"]) && isset($_SESSION["Inequations"]) && isset($_SESSION["NombresEntiers"]) && isset($_SESSION["NombresRationnels"]) && isset($_SESSION["NotionDeFonction"]) && isset($_SESSION["NotionDeProbabilite"]) && isset($_SESSION["Statistique"]) && isset($_SESSION["Volumes"]) && isset($_SESSION["Score"])) {
        $sessionActive=1;
    }
?>