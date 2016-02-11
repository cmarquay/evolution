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
package Personnage;

import Competence.Competence;
import Competence.CompetenceMonstre;
import Competence.EnumCompetence;

/**
 *
 * @author cbrillet
 */
public class Monstre extends Personnage
{

    private String image;
    private CompetenceMonstre comp;

    public Monstre(String nom, EnumCompetence comp, String img)
    {
        this.setVie(100);
        this.setNom(nom);
        this.comp = new CompetenceMonstre(new Competence(comp));
        this.image = img;
    }

    public Monstre(String nom, int vie, String img)
    {
        this.setVie(vie);
        this.setNom(nom);
        this.image = img;
    }

    @Override
    public String affichageVie()
    {
        return "" + this.getVie();
    }

    @Override
    public String affichageNom()
    {
        return this.getNom();
    }

    public String getImage()
    {
        return this.image;
    }

    public void setImage(String img)
    {
        this.image = img;
    }

    @Override
    public boolean estMort()
    {
        return (this.getVie() <= 0);
    }

    @Override
    public int prendDegats(int val)
    {
        this.setVie(this.getVie()-val);
        return this.getVie();
    }
    
    public void setCompetences(EnumCompetence comp)
    {
        this.comp = new CompetenceMonstre(new Competence(comp));
    }
}
