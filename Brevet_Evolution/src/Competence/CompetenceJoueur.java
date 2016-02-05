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
public class CompetenceJoueur extends Competence
{

    public CompetenceJoueur()
    {
        super();
        for (EnumCompetence competence : EnumCompetence.values())
        {
            AjoutCompetence(competence);
        }
    }
    
    public String toString (){
        String retour="";
        for ( EnumCompetence liste : getCompetences())
        {
            retour += liste.getDescription()+" "+liste.getNiveau()+"\n";
        }
        return retour;
    }
}
