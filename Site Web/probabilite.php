<?php
    $titre = "Probabilités";
    include_once("header.php");

?>



<main id="CoursProbabilité" class="Cours">

    
    <h2>Probabilités</h2>
    
    
    <h4>1) Définitions et premières propriétés</h4>
    
    
    <h6>Définition</h6>
    
    <p>Une expérience est aléatoire lorsqu'elle comporte plusieurs résultats ou issues possibles et que l'on ne peut pas prévoir avec certitude quel résultat se produira.</p>
    
    <h6>Exemple 1</h6>
    <p>On lance un dé non truqué et on note le résultat obtenu. Les issues possibles sont : 1, 2, 3, 4, 5 ou 6.</p>
    
    
    <h6>Exemple 2</h6>
    
    <p>On tire une boule dans une urne contenant 3 boules rouges, 2 boules bleues et 5 boules vertes, et on note la couleur de la boule tirée. Les issues possibles sont : vert, rouge ou bleu.</p>
    
   <h6>Propriété</h6> 
    <p>A chaque issue correspond une probabilité, qui est un nombre compris entre 0 et 1.</p>


    <h6>Exemple 1</h6>
    
    <p><span class="italic">p</span>(1) = <span class="italic">p</span>(2) = <span class="italic">p</span>(3) = <span class="italic">p</span>(4) = <span class="italic">p</span>(5) = <span class="italic">p</span>(6) = <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> .</p>
    
    <p>On a une chance sur 6 d'obtenir 1, une chance sur 6 d'obtenir 2, etc…</p>
    
    <h6>Exemple 2</h6>
    
    <p><span class="italic">p</span>(<span class="italic">rouge</span>) = <span class="frac"><sup>3</sup><span>/</span><sub>10</sub></span> , <span class="italic">p</span>(<span class="italic">bleu</span>) = <span class="frac"><sup>2</sup><span>/</span><sub>10</sub></span> = <span class="frac"><sup>1</sup><span>/</span><sub>5</sub></span> et <span class="italic">p</span>(<span class="italic">vert</span>) = <span class="frac"><sup>5</sup><span>/</span><sub>10</sub></span> = <span class="frac"><sup>1</sup><span>/</span><sub>2</sub></span> . On a 3 chances sur 10 d'obtenir une boule rouge,
1 chance sur 5 d'obtenir une boule bleue et 1 chance sur 2 d'obtenir une boule verte.</p>
    
    
    <h6>Propriété</h6>
    
    <p>La somme des probabilités des issues d'une expérience est égale à 1.</p>
    
    
    <h6>Exemple 1</h6>
    
    
    <p><span class="italic">p</span>(1) + <span class="italic">p</span>(2) + <span class="italic">p</span>(3) + <span class="italic">p</span>(4) + <span class="italic">p</span>(5) + <span class="italic">p</span>(6) = <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span>  = <span class="frac"><sup>6</sup><span>/</span><sub>6</sub></span> = 1 .</p>
    
    
    <h6>Exemple 2</h6>
    
    <p><span class="italic">p</span>(<span class="italic">rouge</span>) + <span class="italic">p</span>(<span class="italic">bleu</span>) + <span class="italic">p</span>(<span class="italic">vert</span>) =  <span class="frac"><sup>3</sup><span>/</span><sub>10</sub></span> + <span class="frac"><sup>2</sup><span>/</span><sub>10</sub></span> + <span class="frac"><sup>5</sup><span>/</span><sub>10</sub></span> = <span class="frac"><sup>10</sup><span>/</span><sub>10</sub></span> = 1.</p>
    
    
    <h6>Lien avec les fréquences</h6>
    <p>Quand on répète un grand nombre de fois une expérience aléatoire, la fréquence de réalisation d'un évènement devient proche de sa probabilité.</p>
    
    
    <h6>Exemple 1 </h6>
    
    <p>Si on lance 1000 fois le dé, la fréquence de "6" sera proche de 0,167, qui est un valeur approchée de <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span></p>
    
    <p>Chaque expérience peut être représentée par un arbre :</p>
    
    <div class="gauche">
    <h6>Exemple 1</h6>
    <p><img src="images/proba_img1.png" alt="image proba 1"/></p>
    </div>
    
    <div class="droite">
    <h6>Exemple 2</h6>
    <p><img src="images/proba_img2.png" alt="image proba 2"/></p>
    </div>
    
    
    <h4>2) Notion d'évènement </h4>
    
    
    <h6>Définitions</h6>
    
    <p>Un évènement est constitué d'une ou plusieurs issues d'une expérience aléatoire. Un évènement est impossible s'il ne peut pas se produire. Un évènement est certain s'il se produit forcément.</p>
    
    <h6>Propriétés</h6>
    <p>a) La probabilité d'un évènement est égale à la somme des probabilités des issues qui réalisent cet évènement.</p>
    <p>b) La probabilité d'un évènement impossible est égale à 0.</p>
    <p>c) La probabilité d'un évènement certain est égale à 1.</p>
    
    
    <h6>Exemple 1</h6>
    <p>On appelle <span class="italic">A</span> l'évènement "obtenir au moins 4", <span class="italic">B</span> l'évènement "obtenir 8" et <span class="italic">C</span> l'évènement "obtenir un nombre entier.</p>
    
    <p><span class="italic">p</span>(<span class="italic">A</span>) = <span class="italic">p</span>(4) + <span class="italic">p</span>(5) + <span class="italic">p</span>(6) =  <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> = <span class="frac"><sup>3</sup><span>/</span><sub>6</sub></span> = <span class="frac"><sup>1</sup><span>/</span><sub>2</sub></span></p>
    
    <p><span class="italic">p</span>(<span class="italic">B</span>) = 0 (il est impossible d'obtenir 8).</p>
    
    <p><span class="italic">p</span>(<span class="italic">C</span>) = 1 (on est certain d'obtenir un nombre entier).</p>
    
    
    <h6>Exemple 2</h6>
    
    <p>On appelle <span class="italic">A</span> l'évènement "obtenir une boule bleue ou verte", <span class="italic">B</span> l'évènement "obtenir une boule bleue, verte ou rouge" et <span class="italic">C</span> l'évènement "obtenir une boule jaune".</p>
    
    <p><span class="italic">p</span>(<span class="italic">A</span>) = <span class="italic">p</span>(<span class="italic">bleu</span>) + <span class="italic">p</span>(<span class="italic">vert</span>) = <span class="frac"><sup>2</sup><span>/</span><sub>10</sub></span> + <span class="frac"><sup>5</sup><span>/</span><sub>10</sub></span> = <span class="frac"><sup>7</sup><span>/</span><sub>10</sub></span></p>
    
    <p><span class="italic">p</span>(<span class="italic">B</span>) = 1 et <span class="italic">p</span>(<span class="italic">C</span>) = 0</p>
    
    
    <h6>Définitions</h6>
    
    <p>Deux évènements sont incompatibles s'ils ne peuvent pas se réaliser en même temps. L'évènement contraire d'un évènement <span class="italic">A</span> est celui qui se réalise lorsque <span class="italic">A</span> ne se réalise pas. On le note <span class="italic">non A</span>.</p>
    
    
    
    <h6>Propriétés</h6>
    
    <p>a) Lorsque deux évènements sont incompatibles, la probabilité pour que l'un ou l'autre se réalise est égale à la somme de leur probabilités.</p>
    
    <p>b) La somme des probabilités d'un évènement et de son contraire est égale à 1.</p>
    
    <h6>Exemple 1</h6>
    
    <p>Si on note <span class="italic">A</span> l'évènement "on obtient 5 ou 6" et <span class="italic">B</span> l'évènement "on obtient au moins 2".</p>
    
    <p><span class="italic">p</span>(<span class="italic">A</span>) = <span class="italic">p</span>(5) + <span class="italic">p</span>(6) = <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> + <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> = <span class="frac"><sup>2</sup><span>/</span><sub>6</sub></span> = <span class="frac"><sup>1</sup><span>/</span><sub>3</sub></span> (les évènements "obtenir 5" et "obtenir 6" sont incompatibles).</p>
    
    <p>L'évènement contraire de <span class="italic">B</span> est "obtenir 1".</p>
    
    <p><span class="italic">p</span>(<span class="italic">B</span>) + <span class="italic">p</span>(1) = 1 donc <span class="italic">p</span>(<span class="italic">B</span>) = 1 &minus; <span class="italic">p</span>(1) = 1 &minus; <span class="frac"><sup>1</sup><span>/</span><sub>6</sub></span> = <span class="frac"><sup>5</sup><span>/</span><sub>6</sub></span> .</p>
    
    
    
    <h4>3) Exemple d'une expérience aléatoire à deux épreuves</h4>
    
    <p>On lance une pièce de monnaie et on note si on obtient pile ou face, puis on tire une boule dans l'urne de l'exemple 2. On peut représenter l'arbre correspondant à cette expérience aléatoire :</p>
    
    
    <p><img src="images/proba_img3.png" alt="image proba 3"</p>
    
    <h6>Propriété</h6>
    
    <p>Avec un arbre, la probabilité d'une issue est égale au produit des probabilités rencontrées au cours du chemin conduisant à cette issue.</p>
    
    
    <h6>Exemples</h6>
    
    <p><span class="italic">p</span>(<span class="italic">pile ; bleu</span>) = <span class="frac"><sup>1</sup><span>/</span><sub>2</sub></span> &times; <span class="frac"><sup>2</sup><span>/</span><sub>10</sub></span> = <span class="frac"><sup>1</sup><span>/</span><sub>10</sub></span></p>
    
    <p><span class="italic">p</span>(<span class="italic">face ; vert</span>) = <span class="frac"><sup>1</sup><span>/</span><sub>2</sub></span> &times; <span class="frac"><sup>5</sup><span>/</span><sub>10</sub></span> = <span class="frac"><sup>5</sup><span>/</span><sub>20</sub></span> = <span class="frac"><sup>1</sup><span>/</span><sub>4</sub></span></p>
    
    
    
    
</main>

<?php
    include_once("footer.php");
?>