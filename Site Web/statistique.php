<?php
    $titre = "Statistiques";
    include_once("header.php");

?>



<main id="CoursStatistique" class="Cours">


        <h2>Statistiques</h2>
        
        <h4>1) Présentation de deux exemples</h4>
        
        <h6>Exemple 1</h6>
        
        <p>Une série de notes d'un contrôle :</p>
        
        <p>8 – 9 – 14 – 8 – 12 – 9 – 7 – 12 – 9 – 13 – 9 – 11 – 12 – 7 – 9 – 8 – 11 – 8 – 8 – 15 – 10 – 14 – 8 – 13 – 7.</p>

        <h6>Exemple 2</h6>
        
        <p>A la sortie d'une agglomération, on a relevé la répartition par tranches horaires de 6400 véhicules quittant la ville entre 16 h et 22 h :</p>

        <p><img src ="images/stat_img1.png" alt="tableau stat 1"/></p>
        
        <h4>2) Effectifs, effectifs cumulés, fréquences, fréquences cumulées</h4>

        <p>La fréquence est le quotient de l'effectif par l'effectif total. La fréquence cumulée est le quotient de l'effectif cumulé par l'effectif total.</p>

        <h6>Exemple 1</h6>
        
        <p>Effectif total : ...</p>
        
        <p><img src="images/stat_img2.png" alt="tableau stat 2"/></p>
        
        
        
        <h6>Exemple 2</h6>
        
        <p>Effectif total : ...</p>
        
        <p><img src="images/stat_img3.png" alt="tableau stat 3"/></p>
        
        <h4>3) Moyenne, médiane, quartiles et étendue</h4>
        
        <p>La moyenne d'une série statistique est le quotient de la somme de tous les nombres de cette série par l'effectif total.</p>
        

        <h6>Exemple 1</h6>
        
        <p>On peut additionner toutes les notes et diviser le résultat par 25. Ayant le tableau des effectifs, on peut aller plus vite :</p>
        
        <p><span class="frac"><sup>7&times3 + 8&times6 + 9&times5 + 10&times1 + 11&times2 + 12&times3 + 13&times2 + 14&times2 + 15&times1</sup><span>/</span><sub>25</sub></span> = 10.04</p>
        
        <p>La moyenne du contrôle est de 10,04.</p>
        
        
        <h6>Exemple 2</h6>
        
        <p>Dans ce cas, on calcule d'abord le centre des classes :</p>
        
        <p><img src="images/stat_img4.png" alt="tableau stat 4"/></p>
        
        
        <p><span class="frac"><sup>16,5&times;1100 + 17,5&times;2000 + 18,5&times;1600 + 19,5&times;900 + 20,5&times;450 + 21,5&times;350</sup><span>/</span><sub>6400</sub></span> &asymp; 18,3</p>
        
        
        <p>Lorsque les valeurs sont rangées par ordre croissant ou décroissant, la médiane d'une série statistique est un nombre <span class="italic">M</span> tel qu'au moins 50 % des valeurs de la série soient inférieures à <span class="italic">M</span> et au moins 50 % des valeurs de la série soient supérieures à <span class="italic">M</span>. Le premier quartile <span class="italic">Q</span><sub>1</sub> est la plus petite valeur telle qu'au
moins 25 % des valeurs de la série statistique soient inférieures ou égales à <span class="italic">Q</span><sub>1</sub> . Le troisième quartile <span class="italic">Q</span><sub>3</sub> est la plus petite valeur telle qu'au moins 75 % des valeurs de la série statistique soient inférieures ou égales à <span class="italic">Q</span><sub>3</sub> . On peut résumer tout ceci à l'aide du schéma :</p>
        
        <p><img src="images/stat_img5.png" alt="tableau stat 5"/></p>
        
        
        <h6>Exemple 1</h6>
        
        <p>Notes rangées par ordre croissant :</p>
        
        <p>25:2 = 12,5 donc la médiane est la 13<sup>ème</sup> note (il y aura 12 notes avant et 12 notes après) : <span class="italic">M</span> = 9</p>
        
        <p>25:4 = 6,25 donc le 1<sup>er</sup> quartile est la 7<sup>ème</sup> note : <span class="italic">Q</span><sub>1</sub> = 8.</p>
        
        <p>25 &times; <span class="frac"><sup>3</sup><span>/</span><sub>4</sub></span> = 18,75 donc le 3<sup>ème</sup> quartile est la 19<sup>ème</sup> note : <span class="italic">Q</span><sub>3</sub> = 12</p>
        
        
        <p>7 – 7 – 7 – 8 – 8 – 8 – 8 – 8 – 8 – 9 – 9 – 9 – 9 – 9 – 10 – 11 – 11 – 12 – 12 – 12 – 13 – 13 – 14 – 14 – 15.</p>
        
        
        <h6>Exemple 2</h6>
        
        <p>Dans cet exemple, on parle de classe médiane : c'est [ 18 ; 19 [.</p>
        <br/>
    <br/>
    <br/>
        <p>L'étendue d'une série statistique est la différence entre la plus grande valeur et la plus petite valeur.</p>
        
        
        <h6>Exemple 1</h6>
        <p>15 &minus; 7 = 8 . L'étendue est 8.</p>
        
        
        <h6>Exemple 2</h6>
        <p>22 &minus; 16 = 6 . L'étendue est 6.</p>
        
        
        <h4>4) Représentations graphiques</h4>
        
        
        <h6>Exemple 1</h6>
        
        <p>Représenter cette série statistique par un diagramme en bâtons :</p>
        
        <p><img src="images/stat_img6.png" alt="tableau stat 6"/></p>
        
        
        <h6>Exemple 2</h6>
        
        <p>Représenter cette série statistique par un histogramme. Dans un histogramme, les aires des rectangles sont proportionnelles aux effectifs. Lorsque les classes ont la même longueur (ce qui est le cas ici), les hauteurs des rectangles sont proportionnelles aux effectifs :</p>
        
        <p><img src="images/stat_img7.png" alt="tableau stat 7"/>/p>
        
        
        <p>On peut aussi représenter cette série statistique par un diagramme circulaire : les angles sont proportionnels aux effectifs :</p>
        
        <p><img src="images/stat_img8.png" alt="tableau stat 8"/></p>
        
        <h4><a href="cours/Les%20statistiques.pdf" target=_blank/>Télécharger le cours en PDF</a></h4>


</main>

<?php
    include_once("footer.php");
?>