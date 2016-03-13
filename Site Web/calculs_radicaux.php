<?php
    $titre = "Calculs élémentaires";
    include_once("header.php");
?>

<main id="CoursNotionFonction" class="Cours">


    <h2>Calculs élémentaires sur les radicaux (racines carrées)</h2>

    <h4>1) Définition</h4>

    <p>Soit a un nombre entier naturel, a² = b si et seulement si b est un nombre positif unique.</p>
    <p>On peut également noter a = √b. D'après la définition, on déduit que (√a)² = √(a²) = a.</p><br/>
    <p>Soit a un nombre entier relatif, a² = b peut avoir zéro, une, ou deux solutions.</p>
    <p>Si b est un nombre strictement négatif, alors l'équation n'a pas de solution.</p>
    <p>Si b vaut zéro, alors l'équation a pour solution a = 0.</p>
    <p>Enfin, si b est strictement positif, alors l'équation admet deux solutions : a = √b et a = -√b.</p><br/>
    <h6>Remarque :</h6>
    <p>Le symbole utilisé pour écrire les racines peut faire penser à un V, mais c'est un R stylisé.</p>
    <p>Il ne s'agit pas du R de racine, mais de celui de « radical ». En effet pour parler des racines carrées, on peut aussi employer le mot « radicaux ».</p>

    <h4>2) Multiplication</h4>

    <p>Si a et b sont deux nombres positifs, alors √a x √b = √ab</p>
    <p>D'après la définition, (√a x √b)² = (√a)² x (√b)² = ab</p>

    <h4>3) Quotient</h4>

    <p>Si a et b sont deux nombres positifs, et b différent de zéro, alors <sup>√a</sup>∕<sub>√b</sub> = √(<sup>a</sup>∕<sub>b</sub>)</p>

    <h4><a href="cours/calculsRadicaux.pdf" target=_blank/>Télécharger le cours en PDF</a></h4>
    <h4><a href="CER_quiz.php" />Accès au quiz</a></h4>

</main>

<?php
    include_once("footer.php");
?>
