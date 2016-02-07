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

import java.util.ArrayList;

/**
 *
 * @author nfoissac
 */
public class CompetenceJoueur()
{
    private ArrayList<Competence> competences;
    public CompetenceJoueur()
    {
        this.competences = new ArrayList<Competence>();
        for (EnumCompetence competence : EnumCompetence.values())
        {
            ajoutCompetence(new Competence(competence));
        }
    }
    
    
    private ArrayList<Competence> donneCompetences () {
        return this.competences;
    }
    
    private void ajoutCompetence(Competence competence){
        donneCompetences().add(competence);
    }
    
    public String toString (){
        String retour="";
        for ( Competence liste : donneCompetences())
        {
            retour += liste.donneNiveau()+" "+liste.donneExperience()+" "+liste.donneExperienceMax()+liste.descrition()+"\n";
        }
        return retour;
    }
}
