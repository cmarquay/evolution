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

/**
 *
 * @author cbrillet
 */
public class Joueur extends Personnage {
    
    private Competence comp;
    
    public Joueur (String nom, int vie, Competence comp) {
        this.vie = vie;
        this.nom = nom;
        this.comp = comp;
    }
    
    public Joueur (String nom, int vie) {
        this.vie = vie;
        this.nom = nom;
    }
    
    @Override
    public String affichageVie () {
        return ""+this.vie;
    }
    
    @Override
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
    
    public void setCompetences (Competence comp) {
        this.comp = comp;
    }
}
