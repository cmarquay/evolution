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
 * Class Statistique elle permet de gere toutes les statistique de jeu du
 * joueur.
 *
 * @version 0.1a
 * @author nfoissac
 */
class Statistique
{

    static private $_score = 0;
    static private $_total_bonne_reponse = 0;
    static private $_total_mauvaise_reponse = 0;
    static private $_monstre_blesser = 0;
    static private $_monstre_tuer = 0;
    static private $_total_experience = 0;
    static private $_total_competences = 0;

    // setteur statistique !
    /**
     * StatistiqueScore() permet de calculer le score du joueur.
     */
    static public function StatistiqueScore()
    {
        self::$_score = (self::$_total_bonne_reponse * 5) + (self::$_total_mauvaise_reponse * 1) + (self::$_total_experience * 1) + (self::$_total_competences * 10) + (self::$_monstre_tuer * 10) + (self::$_monstre_blesser * 2);
    }

    /**
     * StatistiqueMauvaiseReponse() Permet de augmenter le nombre de mauvaise
     * reponse du joueur.
     */
    static public function StatistiqueMauvaiseReponse()
    {
        self::$_total_mauvaise_reponse++;
    }

    /**
     * StatistiqueBonneReponse() Permet de augmenter le nombre de mauvaise
     * reponse du joueur.
     */
    static public function StatistiqueBonneReponse()
    {
        self::$_total_bonne_reponse++;
    }

    /**
     * StatistiqueMonstreBlesser() Permet de augmenter le nombre de monstre
     * blesser par le joueur.
     */
    static public function StatistiqueMonstreBlesser()
    {
        self::$_monstre_blesser++;
    }

    /**
     * StatistiqueMonstreTuer() Permet de augmenter le nombre de monstre tuer
     * par le joueur.
     */
    static public function StatistiqueMonstreTuer()
    {
        self::$_monstre_tuer++;
    }

    /**
     * StatistiqueExperience(int Experience) Permet de augmenter le nombre de
     * point d'experience obtenus par le joueur.
     *
     * @param Experience Le montant d'experience a ajouter au statistique
     * globale du joueur.
     */
    static public function StatistiqueExperience($experience)
    {
        self::$_total_experience += $experience;
    }

    /**
     * StatistiqueCompetence() Permet de augmenter le nombre de
     * point competence obtenus par le joueur.
     */
    static public function StatistiqueCompetence()
    {
        self::$_total_competences++;
    }

    // affichage statistique !!
    /**
     * afficheStatistiqueCompetence() Permet d'afficher la statistique de
     * competence.
     *
     * @return Renvois "total des competences : X ".
     */
    static public function afficheStatistiqueCompetence()
    {
        return "total des competences :" . self::$_total_competences;
    }

    /**
     * afficheStatistiqueScore() Permet d'afficher la statistique de score.
     *
     * @return Renvois "Score du joueur : X ".
     */
    static public function afficheStatistiqueScore()
    {
        return "Score du joueur :" . self::$_score;
    }

    /**
     * afficheStatistiqueBonneReponse() Permet d'afficher la statistique de
     * bonne reponse.
     *
     * @return Renvois "total des bonne reponse : X ".
     */
    static public function afficheStatistiqueBonneReponse()
    {
        return "total des bonne reponse :" . self::$_total_bonne_reponse;
    }

    /**
     * afficheStatistiqueMauvaiseReponse() Permet d'afficher la statistique de
     * mauvaise reponse.
     *
     * @return Renvois "total des mauvaise reponse : X ".
     */
    static public function afficheStatistiqueBonneMauvaise()
    {
        return "total des mauvaise reponse :" . self::$_total_mauvaise_reponse;
    }

    /**
     * afficheStatistiqueMonstreBlesser() Permet d'afficher la statistique de
     * monstre blesser.
     *
     * @return Renvois "total des monstre blesser : X ".
     */
    static public function afficheStatistiqueMonstreBlesser()
    {
        return "total des monstre blesser :" . self::$_monstre_blesser;
    }

    /**
     * afficheStatistiqueExperience() Permet d'afficher la statistique
     * d'experience.
     *
     * @return Renvois "total des point d'Experience : X ".
     */
    static public function afficheStatistiqueExperience()
    {
        return "total des point d'Experience :" . self::$_total_experience;
    }

    /**
     * afficheStatistiqueMonstreTuer() Permet d'afficher la statistique de
     * monstre tuer.
     *
     * @return Renvois "total des monstre tuer : X ".
     */
    static public function afficheStatistiqueMonstreTuer()
    {
        return "total de monstre tuer " . self::$_monstre_tuer;
    }

}

?>
