<?php
    $titre = "Notion de fonction";
    include_once("header.php");

?>



<main id="CoursNotionFonction" class="Cours">


        <h2>Notion de fonction</h2>
        
    
    
        <h4>1) Notion de fonction</h4>
    
    
        <h6>Définition :</h6>
        <p>On appelle fonction de la variable <span class="italic">x</span> tout procédé qui, à chaque nombre <span class="italic">x</span>, associe un unique nombre.</p>
        
    
        <h6>Exemple :</h6>
        <p>La fonction "carré" est le procédé qui à tout nombre <span class="italic">x</span> associe <span class="italic">x</span><sup>2</sup>. On peut nommer cette fonction à l'aide d'une lettre, par exemple <span class="italic">f</span>.</p>
        
        <p><span class="italic">f </span>: <span class="italic">x</span> &#x27FC<span class="italic"> x</span><sup>2</sup></p>
        
        <p>A <span class="italic">x</span>, on associe <span class="italic">x</span><sup>2</sup>. On note aussi <span class="italic">f</span>(<span class="italic">x</span>) = <span class="italic">x</span><sup>2</sup>.</p>
        
        <p>A 4, on associe 16. On note alors <span class="italic">f</span>(4) = 16. On dit que l'image de 4 par la fonction <span class="italic">f</span> est 16, ou bien que 4 est un antécédent de 16 par la fonction <span class="italic">f</span>.</p>
        
        
        
        <h6>Remarques :</h6>

    
        <p>Un nombre ne peut avoir qu'une seule image (voir la définition).</p>
        <p>Un nombre peut avoir aucun, un seul, ou plusieurs antécédents. Reprenons l'exemple précédent :</p>
        <p>16 a deux antécédents, qui sont 4 et &minus;4. En effet, 4<sup>2</sup> = 16 et (&minus;4)<sup>2</sup> = 16.</p>
        <p>0 a un seul antécédent qui est 0.</p>
        <p>&minus;2 n'a pas d'antécédents car le carré d'un nombre ne peut pas être négatif.</p>
        
        
    
        <h4>2) Définir une fonction à l'aide d'un graphique</h4>
    
    <div class="gauche">
        <p>On appelle <span class='italic'>f</span> la fonction définie par le graphique ci-contre.</p>
        <br/>
        <p class="rouge">L'image de 2 par la fonction <span class='italic'>f</span> est &minus;1.</p>
        <br/>
        <p class="vert">Les antécédants de 2 par la fonction <span class='italic'>f</span> sont 1 et 5.</p>
        </div>
        <p class="image"><img src="images/graphique_fonction.png" alt="Photo de graphique"/></p>
        
        
        
    
        <h4>3) Définir une fonction à l'aide d'un tableau</h4>
    
    
        <p>On considère une fonction <span class='italic'>f</span> définie à l'aide du tableau :</p>
        
        <table>
            <tr>
                <td><span class='italic'>x</span></td>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td><span class='italic'>f</span>(<span class='italic'>x</span>)</td>
                <td>&minus;2</td>
                <td>4</td>
                <td>0</td>
                <td>2,7</td>
                <td>&minus;1,6</td>
                <td>0</td>
                <td>8</td>
            
            </tr>
        </table>
        
        <br/>
        
        <p>L'image de 4 par la fonction <span class='italic'>f</span> est &minus;1,6.</p>
        <p>L'antécédent de 2,7 par la fonction <span class='italic'>f</span> est 3.</p>
        
        
        
        
        <h4>4) Définir une fonction avec une formule</h4>
    
        
        <p>On considère le procédé de calcul suivant :</p>
        
        
        <ul id="liste_cours">
            <li>choisir une nombre ;</li>
            <li>lui ajouter 3 ;</li>
            <li>multiplier le nombre obtenu par 2.</li>
        </ul>
        
    
        <br/>
        
        <p>La fonction correspondant à ce procédé de calcul est : </p>
        <p><span class='italic'>f</span> : <span class='italic'>x</span> &#x27FC 2(<span class='italic'>x</span>+3)  (notée aussi <span class='italic'>f</span>(<span class='italic'>x</span>) = 2(<span class='italic'>x</span>+3)).</p>
        
        <br/>
        
        <p>L'image de 2 par la fonction <span class='italic'>f</span> est 10 car <span class='italic'>f</span>(2) = 2&times;(2 + 3) = 2&times;5 =10.</p>
        
        <br/>
        
        <p>Quel est l'antécédent de 4 par la fonction <span class='italic'>f</span> ?</p>
        <p>On cherche <span class='italic'>x</span> tel que 2(<span class='italic'>x</span> + 3) = 4</p>
        <p>2<span class='italic'>x</span>+6 = 4</p>
        <p>2<span class='italic'>x</span> = &minus;2</p>
        <p><span class='italic'>x</span> = &minus;1</p>
    
    <h4><a href="cours/Notion%20de%20fonction.pdf" target=_blank/>Télécharger le cours en PDF</a></h4>
    

</main>

<?php
    include_once("footer.php");
?>