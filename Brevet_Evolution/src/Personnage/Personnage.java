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
 * @author nfoissac
 */
abstract public class Personnage
{

    private int vie;
    private String nom;

    public abstract String affichageVie();

    public abstract String affichageNom();
    
    public abstract boolean estMort();
    
    public abstract int prendDegats(int val);
    
    public int getVie()
    {
        return this.vie;
    }
    
    public String getNom()
    {
        return this.nom;
    }
    
    public void setVie(int val)
    {
        this.vie = val;
    }
    
    public void setNom(String nom)
    {
        this.nom = nom;
    }

}
