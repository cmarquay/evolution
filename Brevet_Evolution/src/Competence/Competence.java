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
public abstract class Competence
{
    private ArrayList<EnumCompetence> competences;

    public Competence()
    {
        this.competences = new ArrayList<EnumCompetence>();
    }
    
    public ArrayList<EnumCompetence> getCompetences(){
        return this.competences;
    }
    
    public void AjoutCompetence(EnumCompetence competence){
        getCompetences().add(competence);
    }
    public EnumCompetence getCompetencesEnum (EnumCompetence competence){
        return getCompetences().get(getCompetences().indexOf(competence));
    }
    
    public int getNiveauComptetence(EnumCompetence competence){
        return getCompetencesEnum(competence).getNiveau();
    }
    
    public boolean peutGainNiveau(EnumCompetence competence){
        return getCompetencesEnum(competence).isUP();
    }
    
    public void gainNiveauComptetence(EnumCompetence competence){
        getCompetencesEnum(competence).gainNiveau();
    }
}
