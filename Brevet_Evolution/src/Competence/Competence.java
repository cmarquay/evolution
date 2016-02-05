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
package Competence;

/**
 *
 * @author nfoissac
 */
public class Competence
{
    public static void main(String[] args)
    {
        EnumCompetence test = EnumCompetence.NotionDeFonction;
        System.out.println(test.getDescription());
        System.out.println(test.getNiveau());
        test.setNiveauPlus();
        System.out.println(test.getNiveau());
    }
}
