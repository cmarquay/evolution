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
 *
 * @author nfoissac
 */
// class devra contenir toute les methode pour le calcul des scrore et divers stat!!
public class Statistique
{

    static private int score = 0;
    static private int monstre_tuer = 0;
    static private int total_experience = 0;
    static private int total_competences = 0;

    // setteur statistique !
    static public void StatistiqueMonstreTuer()
    {
        monstre_tuer++;
    }

    static public void StatistiqueExperience(int Experience)
    {
        total_experience += Experience;
    }

    static public void StatistiqueCompetence()
    {
        total_competences++;
    }

    // affichage statistique !!
    static public String afficheStatistiqueCompetence()
    {
        return "total des competences :" + total_competences;
    }

    static public String afficheStatistiqueExperience()
    {
        return "total des point d'Experience :" + total_experience;
    }

    static public String afficheStatistiqueMonstreTuer()
    {
        return "total de monstre tuer " + monstre_tuer;
    }

}
