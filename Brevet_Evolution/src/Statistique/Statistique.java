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
package Statistique;

/**
 * Class Statistique elle permet de gere toutes les statistique de jeu du
 * joueur.
 *
 * @version 0.1a
 * @author nfoissac
 */
public class Statistique
{

    static private int score = 0;
    static private int total_bonne_reponse = 0;
    static private int total_mauvaise_reponse = 0;
    static private int monstre_blesser = 0;
    static private int monstre_tuer = 0;
    static private int total_experience = 0;
    static private int total_competences = 0;

    // setteur statistique !
    /**
     * StatistiqueScore() permet de calculer le score du joueur.
     */
    static public void StatistiqueScore()
    {
        score = (total_bonne_reponse * 5) + (total_mauvaise_reponse * 1) + (total_experience * 1) + (total_competences * 10) + (monstre_tuer * 10) + (monstre_blesser * 2);
    }

    /**
     * StatistiqueMauvaiseReponse() Permet de augmenter le nombre de mauvaise
     * reponse du joueur.
     */
    static public void StatistiqueMauvaiseReponse()
    {
        total_mauvaise_reponse++;
    }

    /**
     * StatistiqueBonneReponse() Permet de augmenter le nombre de mauvaise
     * reponse du joueur.
     */
    static public void StatistiqueBonneReponse()
    {
        total_bonne_reponse++;
    }

    /**
     * StatistiqueMonstreBlesser() Permet de augmenter le nombre de monstre
     * blesser par le joueur.
     */
    static public void StatistiqueMonstreBlesser()
    {
        monstre_blesser++;
    }

    /**
     * StatistiqueMonstreTuer() Permet de augmenter le nombre de monstre tuer
     * par le joueur.
     */
    static public void StatistiqueMonstreTuer()
    {
        monstre_tuer++;
    }

    /**
     * StatistiqueExperience(int Experience) Permet de augmenter le nombre de
     * point d'experience obtenus par le joueur.
     *
     * @param Experience Le montant d'experience a ajouter au statistique
     * globale du joueur.
     */
    static public void StatistiqueExperience(int Experience)
    {
        total_experience += Experience;
    }

    /**
     * StatistiqueCompetence() Permet de augmenter le nombre de
     * point competence obtenus par le joueur.
     */
    static public void StatistiqueCompetence()
    {
        total_competences++;
    }

    // affichage statistique !!
    /**
     * afficheStatistiqueCompetence() Permet d'afficher la statistique de
     * competence.
     *
     * @return Renvois "total des competences : X ".
     */
    static public String afficheStatistiqueCompetence()
    {
        return "total des competences :" + total_competences;
    }

    /**
     * afficheStatistiqueScore() Permet d'afficher la statistique de score.
     *
     * @return Renvois "Score du joueur : X ".
     */
    static public String afficheStatistiqueScore()
    {
        return "Score du joueur :" + score;
    }

    /**
     * afficheStatistiqueBonneReponse() Permet d'afficher la statistique de
     * bonne reponse.
     *
     * @return Renvois "total des bonne reponse : X ".
     */
    static public String afficheStatistiqueBonneReponse()
    {
        return "total des bonne reponse :" + total_bonne_reponse;
    }

    /**
     * afficheStatistiqueMauvaiseReponse() Permet d'afficher la statistique de
     * mauvaise reponse.
     *
     * @return Renvois "total des mauvaise reponse : X ".
     */
    static public String afficheStatistiqueBonneMauvaise()
    {
        return "total des mauvaise reponse :" + total_mauvaise_reponse;
    }

    /**
     * afficheStatistiqueMonstreBlesser() Permet d'afficher la statistique de
     * monstre blesser.
     *
     * @return Renvois "total des monstre blesser : X ".
     */
    static public String afficheStatistiqueMonstreBlesser()
    {
        return "total des monstre blesser :" + monstre_blesser;
    }

    /**
     * afficheStatistiqueExperience() Permet d'afficher la statistique
     * d'experience.
     *
     * @return Renvois "total des point d'Experience : X ".
     */
    static public String afficheStatistiqueExperience()
    {
        return "total des point d'Experience :" + total_experience;
    }

    /**
     * afficheStatistiqueMonstreTuer() Permet d'afficher la statistique de
     * monstre tuer.
     *
     * @return Renvois "total des monstre tuer : X ".
     */
    static public String afficheStatistiqueMonstreTuer()
    {
        return "total de monstre tuer " + monstre_tuer;
    }

}
