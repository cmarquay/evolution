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
public enum EnumCompetence
{
NotionDeFonction("Notion de fonction");
private String description = "";
private int niveau;

    private EnumCompetence(String description)
    {
        this.description = description;
        this.niveau = 0;
    }
    
    public String getDescription(){
        return this.description;
    }
    
    public int getNiveau(){
        return this.niveau;
    }
    
    public void setNiveauPlus(){
        this.niveau +=1; 
    }
}
