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

    NotionDeFonction("Notion de fonction"),
    FonctionLineaire("Fonction linéaire"),
    Statistique("Statistique"),
    NotionDeProbabilite("Notion de probabilité"),
    NombresEntiers("Nombres entiers"),
    NombresRationnels("Nombres rationnels"),
    CalculsElementaires("Calculs élémentaires sur les radicaux"),
    EcrituresLitterales("Écritures littérales"),
    Equations("Équations du premier degré"),
    Inequations("Inéquations du premier degré"),
    FiguresPlanes("Figures planes"),
    Configurations("Configurations dans l’espace"),
    Aires("Aires"),
    Volumes("Volumes"),
    Grandeurs("Grandeurs composées"),
    ChangementDunites("changement d’unités");

    private String description = "";
    private int niveau;
    private int experience;
    private int experieceMax;

    private EnumCompetence(String description)
    {
        this.description = description;
        this.niveau = 0;
        this.experience = 0;
        this.experieceMax = 100;
    }

    public String getDescription()
    {
        return this.description;
    }

    public int getNiveau()
    {
        return this.niveau;
    }

    public int getExperience(){
        return this.experience;
    }
    
    public int getExperienceMax()
    {
        return this.experieceMax;
    }

    public void ajouteExperience(int nombre)
    {
        this.experience += nombre;
    }

    private void setExperienceNull()
    {
        this.experience = 0;
    }

    private void setNewExperienceMax()
    {
        this.experieceMax = (int) (getExperienceMax() * 0.03) + getNiveau() + getExperienceMax();
    }

    private void setNiveauPlus()
    {
        this.niveau += 1;
    }
    
    public boolean isUP(){
        
        if (getExperience()>=getExperienceMax())
        {
            return true;
        }else {
            return false;
        }
    }
    
    public void gainNiveau(){
        setNiveauPlus();
        setExperienceNull();
        setNewExperienceMax();
    }
}
