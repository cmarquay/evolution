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

import Competence.Competence;
import Competence.CompetenceJoueur;
import Competence.EnumCompetence;

/**
 *
 * @author nfoissac
 */
public class TestCompetences
{
        public static void main(String[] args)
    {
        Competence test = new CompetenceJoueur();
        System.out.println(test);
        System.out.println(test.getNiveauComptetence(EnumCompetence.Aires));
        for (int i = 0; i < 20; i++)
        {
           test.gainNiveauComptetence(EnumCompetence.Aires);
           System.out.println(test.getCompetencesEnum(EnumCompetence.Aires).getExperienceMax());
        }
        System.out.println(test);
        Competence test2 = new CompetenceJoueur();
        System.out.print(test2);
    }
}
