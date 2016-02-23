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
include "../Personnage/Personnage.php";
include "../Personnage/Joueur.php";
include "../Personnage/Monstre.php";
include "../Competence/Competence.php";
include "../Competence/CompetenceJoueur.php";
include "../Competence/CompetenceMonstre.php";
include "../Statistique/Statistique.php";

$test = new CompetenceJoueur;
echo $test->toString();
System.out.println(Statistique.afficheStatistiqueCompetence());
$test->donneCompetence(0)->gainNiveau();
$test->donneCompetence(0)->ajouteExperience(5000);
echo $test->toString();
echo Statistique::afficheStatistiqueCompetence();
echo Statistique::afficheStatistiqueExperience();

?>
