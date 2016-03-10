<?php
    $titre = "Inscription";
    include_once("connexion_base.php");
    include_once("utile.php");
    include_once("header.php");

    $probleme="";

    //Traitement des variables POST
    if(isset($_POST["send"])) {
        if(isset($_POST["pseudo"]) && isset($_POST["email"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["motDePasse"]) &&
            !empty($_POST["pseudo"]) && !empty($_POST["email"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["motDePasse"])) {
            if(VerifierAdresseMail($_POST["email"])) {
                $pseudo = addslashes(htmlEntities($_POST["pseudo"]));
                $email = stripSlashes(htmlEntities($_POST["email"]));
                $nom = addslashes(htmlEntities($_POST["nom"]));
                $prenom = addslashes(htmlEntities($_POST["prenom"]));
                $motDePasse = md5(addslashes(htmlEntities($_POST["motDePasse"])));
                $avatar = "images/avatars/defaut.jpg";
                if(!DansBase($pseudo, $email)) {
                    //On ajoute à la bdd l'utilisateur
                    $sql = "INSERT INTO individu (`Pseudo`,`Email`,`Nom`,`Prenom`,`MotDePasse`,`Avatar`,`Aires`,`CalculsElementaires`,`ChangementDunites`,`Configurations`,`EcrituresLitterales`,`Equations`,`FonctionLineaire`,`Grandeurs`,`Inequations`,`NombresEntiers`,`NombresRationnels`,`NotionDeFonction`,`NotionDeProbabilite`,`Statistique`,`Volumes`,`Score`) VALUES('$pseudo','$email','$nom','$prenom','$motDePasse'";
                    if(isset($_FILES["avatar"]) && !empty($_FILES["avatar"])) {
                        if($_FILES["avatar"]["error"]==0) {
                            //copie dans le fichier avatars
                            $avatar = "images/avatars/$pseudo.jpg";
                            move_uploaded_file($_FILES["avatar"]["tmp_name"],"$avatar");
                        }
                    }
                    $sql .= ",'$avatar',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);";
                    $resultat = $connexion->query($sql);
                    //Fonction d'envoi du mail
                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1";
                    $sujet = addslashes(htmlentities("Inscription sur BrevetEvolution"));
                    $message = "<html><head><title>Confirmation d'inscription au site BrevetEvolution</title></head>
                                <body><p>Bonjour,</p><p>Vous venez de vous inscrire sur le site BrevetEvolution,\nMerci pour votre confiance !</p><p>Vous pouvez maintenant vous connecter sur le site avec votre pseudo et votre mot de passe.</p></body></html>";
                    mail($email,"Inscription sur BrevetEvolution",$message,$headers);
                    header("Location:connexion.php");
                } else {
                    $probleme = "Ce pseudo et/ou cette adresse mail est déjà dans la base de données";
                }
            } else {
                $probleme = "Email incorrect";
            }
        } else {
            echo "<script type=\"text/javascript\">";
            echo "alert('Veuillez complétez les champs marqués d'un *');";
            echo "window.history.back();";
            echo "</script>";
        }
    }
?>

<div class="formulaire">
    <form enctype="multipart/form-data" method="post" action="inscription.php">
        <p><label for="edtPseudo" id="idPseudo">PSEUDO *</label></p>
        <p><input type="text" id="edtPseudo" name="pseudo" required /></p>
        <p><label for="edtEmail" id="idEmail">EMAIL *</label></p>
        <p><input type="email" id="edtEmail" name="email" required /></p>
        <p><label for="edtNom" id="idNom">NOM *</label></p>
        <p><input type="text" id="edtNom" name="nom" required /></p>
        <p><label for="edtPrenom" id="idPrenom">PRENOM *</label></p>
        <p><input type="text" id="edtPrenom" name="prenom" required /></p>
        <p><label for="edtMotDePasse" id="idMotDePasse">MOT DE PASSE *</label></p>
        <p><input type="password" id="edtMotDePasse" name="motDePasse" required /></p>
        <p><label for="edtAvatar" id="idAvatar">AVATAR</label></p>
        <p><input type="file" id="edtAvatar" name="avatar" accept="image/jpg" />
        </p>
        <p class="submit"><input type="submit" id="submit" name="send" value="Envoyer" /></p>
        <p>Les champs marqués d'un * sont obligatoires</p>
        <?php echo "<p>".$probleme."</p>"; ?>
    </form>
</div>

<?php
    include_once("footer.php");
?>