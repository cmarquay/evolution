<?php
    $titre = "Connexion";
    include_once("connexion_base.php");
    include_once("utile.php");
    include_once("header.php");

    $probleme = "";

    if(isset($_POST["send"])) {
        if(isset($_POST["pseudo"]) && isset($_POST["motDePasse"]) &&
            !empty($_POST["pseudo"]) && !empty($_POST["motDePasse"])) {
            //recuperation des données du formulaire
            $pseudo = addslashes(htmlEntities($_POST["pseudo"]));
            $motDePasse = md5(addslashes(htmlEntities($_POST["motDePasse"])));
            //requete
            $sql = "SELECT Pseudo, Nom, Prenom, Avatar, Aires, CalculsElementaires, ChangementDunites, Configurations, EcrituresLitterales, Equations, FonctionLineaire, Grandeurs, Inequations, NombresEntiers, NombresRationnels, NotionDeFonction, NotionDeProbabilite, Statistique, Volumes, Score FROM individu WHERE Pseudo='$pseudo' and MotDePasse='$motDePasse'";
            //envoi de la requete
            $resultat1 = $connexion->query($sql);
            if($resultat1->rowCount() > 0) {
                //l'utilisateur existe
                session_start();
                $resultat2 = $resultat1->fetchALL(PDO::FETCH_ASSOC);
                foreach ($resultat2[0] as $k => $v) {
                    $_SESSION[$k] = $v;
                }
                header("Location:index.php");
            } else {
                echo "<script type=\"text/javascript\">";
                echo "alert('Erreur de pseudo ou de mot de passe');";
                echo "window.history.back();";
                echo "</script>";
            }
        }
    }
?>

<div class="formulaire">
    <form method="post" action="connexion.php">
        <p><label for="edtPseudo" id="idPseudo">PSEUDO</label></p>
        <p><input type="text" id="edtPseudo" name="pseudo" required /></p>
        <p><label for="edtMotDePasse" id="idMotDePasse">MOT DE PASSE</label></p>
        <p><input type="password" id="edtMotDePasse" name="motDePasse" required /></p>
        <p class="submit"><input type="submit" id="submit" name="send" value="Envoyer" /></p>
        <?php echo "<p>".$probleme."</p>"; ?>
    </form>
</div>

<?php
    include_once("footer.php");
?>