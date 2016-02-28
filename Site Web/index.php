<?php
    $titre = "Brevet Evolution";
    include_once("header.php");

/****** PHP PAGE CONTACT ******/
    // ADRESSE MAIL A DEFINIR POUR LA RECEPTION DES MESSAGES
    $destinataire = 'guillaumehanotel@orange.fr';// j'ai mis la mienne en attendant

    // Messages de confirmation du mail
    $message_envoye = "Votre message nous est bien parvenu !";
    $message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

    // Messages d'erreur du formulaire
    $message_erreur_formulaire = "Vous devez d'abord <a href=\"contact.php\">envoyer le formulaire</a>.";
    $message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
    

    if (!isset($_POST['submit'])){
	   // formulaire non envoyé
	  /* echo '<p>'.$message_erreur_formulaire.'</p>'."\n";    */      
    } else {
        
    
        //  cette fonction sert à nettoyer et enregistrer un texte  
	   function Rec($text)
	   {
           $text = htmlspecialchars(trim($text), ENT_QUOTES);
           if (1 === get_magic_quotes_gpc())
           {
               $text = stripslashes($text);
           }
           $text = nl2br($text);
           return $text;
       };
        
    
	  // Cette fonction sert à vérifier la syntaxe d'un email   
	   function IsEmail($email)
	   {
           $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
           return (($value === 0) || ($value === false)) ? false : true;
	   }  
        
        
        // formulaire envoyé, on récupère tous les champs.
	   $nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
	   $email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
	   $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
        
        // On va vérifier les variables et l'email ...
	   $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
 
	   if (($nom != '') && ($email != '') && ($message != ''))
	   {   
        // les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();
        
           $cible = $destinataire;
           $objet = 'Contact Evolution';
        
           $message = str_replace("&#039;","'",$message);
           $message = str_replace("&#8217;","'",$message);
           $message = str_replace("&quot;",'"',$message);
           $message = str_replace('<br>','',$message);
           $message = str_replace('<br />','',$message);
           $message = str_replace("&lt;","<",$message);
           $message = str_replace("&gt;",">",$message);
           $message = str_replace("&amp;","&",$message);
        
        
           // Envoi du mail
		  if (mail($cible, $objet, $message, $headers))
		  {
              echo '<p class="envoi">'.$message_envoye.'</p>'."\n";
          }
           else
		  {
               echo '<p class= "envoi">'.$message_non_envoye.'</p>'."\n";
		  };
        
        
        
        }
	else
	{
		// une des 3 variables (ou plus) est vide ...
		echo '<p class="envoi">'.$message_formulaire_invalide.' <a href="contact.php">Retour au formulaire</a></p>'."\n";
	};
        
        
    };

/*************************************************/
/*************************************************/        
        
?>
<main id="index">


<div id="index1"><p>Bienvenue sur Brevet Evolution, une plateforme éducative permettant de réviser vos cours de maths de 3ème et de vous tester à travers un quiz divertissant !</p></div>




</main>

<?php
    include_once("footer.php");
?>