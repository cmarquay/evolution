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
 * @version 0.1 changement sur les attribut ! prototypage competance et statiqique !
 * @author cbrillet
 * @author nfoissac
 */
public class Joueur /*extends Personnage (class mere non finie) */{
    
    private CompetenceJoueur comp;
    private int vie;
    private String nom;
    
    public Joueur (String nom) {
        this.vie = 100;
        this.nom = nom;
        this.comp = new CompetenceJoueur();
    }
    
    public Joueur (String nom, int vie) {
        this.vie = vie;
        this.nom = nom;
    }
    
    
    public String affichageVie () {
        return ""+this.vie;
    }
    
    
    public String affichageNom () {
        return this.nom;
    }
    
    public boolean estMort () {
        return (this.vie <= 0);
    }
    
    public int prendDegats (int val) {
        this.vie -= val;
        return this.vie;
    }
    
    public void setCompetences (CompetenceJoueur comp) {
        this.comp = comp;
    }
}
