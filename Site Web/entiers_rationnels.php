<?php
    $titre = "Nombres entiers et rationnels";
    include_once("header.php");
?>

<main class="Cours">


    <h2 id="haut">Nombres entiers et rationnels</h2>

    <h4>1) Ensembles</h4>

        <p>Les nombres entiers naturels sont les nombres positifs qui peuvent s'écrire sans virgule ni autre symbole.</p>
        <p>Par exemple √2 ou ⅓ ne sont pas des entiers naturels, mais 9 en est bien un.</p><br/>
        <p>Les nombres entiers relatifs sont les nombres positifs et négatifs qui peuvent s'écrire sans virgule ni autre symbole.</p>
        <p>-9 n'est pas un entier naturel mais est un entier relatif.</p><br/>
        <p>Les nombres rationnels sont les nombres qui s'écrivent sous la forme d'un quotient de deux entiers relatifs.</p>
        <p>⅍ est un nombre rationnel si et seulement si S est différent de zéro. A est alors appelé le numérateur et S le dénominateur.</p>

    <h4>2) Diviseurs</h4>

        <p>Soit A et S deux entiers relatifs, S est dit diviseur de A si et seulement si le reste de la division euclidienne de A par S est égal à zéro.</p>
        <br/>
        <p>Si A et S sont deux entiers relatifs, un diviseur commun à A et S est un nombre qui est diviseur de A et diviseur de S.<sup><a href="#bas">1</a></sup>
        <p>4 est un diviseur commun à 24 et à 32 car 6 x 4 = 24 et 8 x 4 = 32</p>
        <br/>
        <p>Un nombre rationnel est dit irréductible si son numérateur et son dénominateur n'acceptent aucun diviseur commun.</p>
        <p>7 et 8 n'ont pas de diviseur commun, ⅞ est un nombre rationnel irréductible.</p>

    <h4>3) PGCD</h4>

        <p>Le PGCD est le plus grand diviseur commun (common divisor en anglais) à deux entiers relatifs.</p>
        <p>Le PGCD de A et S est noté PGCD(A;S).</p>
        <p>8 est le PGCD de 24 et 32 car 8 x 3 = 24 et 8 x 4 = 32, puis 3 et 4 n'ont pas de diviseur commun. On écrit PGCD(24;32) = 8.</p>

    <h4><a href="cours/entiersRationnels.pdf" target=_blank/>Télécharger le cours en PDF</a></h4>
    <h4><a href="ER_quiz.php" target=_blank/>Accès au quiz</a></h4>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <p id="bas"><a href="#haut">1</a>   Rappels : critères de divisibilité</p>
    <ul id="liste_cours">
        <li>Un nombre est divisible par 2 s'il est pair : son chiffres des unités est 0 , 2 , 4 , 6 , 8 .</li>
        <li>Un nombre est divisible par 3 si la somme de ses chiffres est dans la table de 3 .</li>
        <li>Un nombre est divisible par 4 si le nombre formé par ses deux derniers chiffres est dans la table de 4 .</li>
        <li>Un nombre est divisible par 5 si son chiffre des unités est 0 ou 5 .</li>
        <li>Un nombre est divisible par 6 s'il est divisible par 2 et 3 .</li>
        <li>Un nombre est divisible par 9 si la somme de ses chiffres est dans la table de 9 . </li>
    </ul>

</main>

<?php
    include_once("footer.php");
?>
