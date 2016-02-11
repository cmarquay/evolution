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

import Competence.CompetenceJoueur;

/**
 * @version 0.1 changement sur les attribut ! prototypage competance et
 * statiqique !
 * @author cbrillet
 * @author nfoissac
 */
public class Joueur extends Personnage 

{

    private CompetenceJoueur comp;

    public Joueur(String nom)
    {
        this.setVie(100);
        this.setNom(nom);
        this.comp = new CompetenceJoueur();
    }

    public Joueur(String nom, int vie)
    {
        this.setVie(vie);
        this.setNom(nom);
        this.comp = new CompetenceJoueur();
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

    public void setCompetences(CompetenceJoueur comp)
    {
        this.comp = comp;
    }
}
