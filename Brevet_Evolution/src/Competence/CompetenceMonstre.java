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
public class CompetenceMonstre
{

    private Competence competence;

    public CompetenceMonstre(Competence competence)
    {
        this.competence = competence;
    }
    /*
     * manque code !!
     */

    public String toString()
    {

        return this.competence.descrition() + "\n";
    }
}
