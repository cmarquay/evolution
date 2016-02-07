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

    Aires("Aires"),
    CalculsElementaires("Calculs élémentaires sur les radicaux"),
    ChangementDunites("changement d’unités"),
    Configurations("Configurations dans l’espace"),
    EcrituresLitterales("Écritures littérales"),
    Equations("Équations du premier degré"),
    FiguresPlanes("Figures planes"),
    FonctionLineaire("Fonction linéaire"),
    Grandeurs("Grandeurs composées"),
    Inequations("Inéquations du premier degré"),
    NombresEntiers("Nombres entiers"),
    NombresRationnels("Nombres rationnels"),   
    NotionDeFonction("Notion de fonction"),
    NotionDeProbabilite("Notion de probabilité"),
    Statistique("Statistique"),
    Volumes("Volumes");

    private String description = "";

    private EnumCompetence(String description)
    {
        this.description = description;
    }

    public String getDescription()
    {
        return this.description;
    }

}
