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

import Statistique.Statistique;

/**
 *
 * @author nfoissac
 */

// refontes des competences 
// ajout gestion statistique : xp et cometences !
public class Competence
{

    private EnumCompetence competences;
    private int niveau = 0;
    private int experience = 0;
    private int experieceMax = 100;

    public Competence(EnumCompetence competences)
    {
        this.competences = competences;
    }

    public String description()
    {
        return this.competences.getDescription();
    }

    public int donneNiveau()
    {
        return this.niveau;
    }

    public int donneExperience()
    {
        return this.experience;
    }

    public int donneExperienceMax()
    {
        return this.experieceMax;
    }

    public void ajouteExperience(int nombre)
    {
        this.experience += nombre;
        Statistique.StatistiqueExperience(nombre);
    }

    private void definitExperienceNull()
    {
        this.experience = 0;
    }

    private void definitExperienceMax()
    {
        this.experieceMax = (int) (donneExperienceMax() * 0.03) + donneNiveau() + donneExperienceMax();
    }

    private void definitNiveauSuperieur()
    {
        this.niveau += 1;
        Statistique.StatistiqueCompetence();
    }

    public boolean peutMonter()
    {

        if (donneExperience() >= donneExperienceMax())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public void gainNiveau()
    {
        definitNiveauSuperieur();
        definitExperienceNull();
        definitExperienceMax();
    }
}
