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

    private EnumCompetence(String description)
    {
        this.description = description;
    }

    public String getDescription()
    {
        return this.description;
    }

}
