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
package Test;


import Competence.*;
import Statistique.Statistique;

/**
 *
 * @author nfoissac
 */
public class TestCompetences
{
        public static void main(String[] args)
    {
        CompetenceJoueur test = new CompetenceJoueur();
        System.out.println(test);
        System.out.println(Statistique.afficheStatistiqueCompetence());
        test.donneCompetence(0).gainNiveau();
        System.out.println(test);
        System.out.println(Statistique.afficheStatistiqueCompetence());
        
    }
}
