<?php
    $titre = "Brevet Evolution";
    include_once("header.php");
?>
<main id="contact">

<div class="contact">
    <form method="post" action="index.php">
    
        <label>Nom</label>    
        <input name ="nom" placeholder="Votre nom">
    
        <label>Email</label>
        <input name="email" type="email" placeholder="Votre Adresse Mail">
    
        <label>Message</label>
        <textarea name="message" placeholder="Votre message..."></textarea>
              
        <input id="submit" name="submit" type="submit" value="Envoyer">          
                            
    </form>

</div>


</main>

<?php
    include_once("footer.php");
?>