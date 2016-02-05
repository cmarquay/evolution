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
public class Competence
{
    private ArrayList<EnumCompetence> competences;

    public Competence()
    {
        this.competences = new ArrayList<EnumCompetence>();
        this.competences.add(EnumCompetence.Aires);
    }
    
    public ArrayList<EnumCompetence> getComptetences(){
        return this.competences;
    }
    
    public EnumCompetence getCompetencesEnum (EnumCompetence competence){
        return getComptetences().get(getComptetences().indexOf(competence));
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
