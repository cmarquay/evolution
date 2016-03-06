<?php
    $titre = "Écritures littérales";
    include_once("header.php");
?>

<main id="CoursNotionFonction" class="Cours">


    <h2>Écritures littérales</h2>

    <h4>1) Développer</h4>

    <p>Développer, c'est transformer un produit en somme.</p>
    <h6>Exemples :</h6>
    <ul id="liste_cours">
        <li>k(a+b) = ka + kb</li>
        <li>k(a-b) = ka – kb</li>
        <li>(a+b)(c+d) = ac + ad + bc + bd</li>
    </ul>

    <h4>2) Factoriser</h4>

    <p>Factoriser, c'est transformer une somme en produit.</p>
    <h6>Exemples :</h6>
    <ul id="liste_cours">
        <li>ka + kb = k(a+b)</li>
        <li>ka – kb = k(a-b)</li>
    </ul>

    <h4>3) Identités remarquables</h4>

    <p>Il existe trois identités remarquables découlant du développement et de la factorisation :</p>
    <ul id="liste_cours">
        <li>(a+b)² = a² +2ab + b²</li>
        <li>(a-b)² = a² - 2ab + b²</li>
        <li>(a-b)(a+b) = a² - b²</li>
    </ul><br/>
    <p>Si on développe ces trois expressions, on vérifie en effet :</p>
    <ul id="liste_cours">
        <li>(a+b) x (a+b) = aa + ab + ba + bb = a² + 2ab + b²</li>
        <li>(a-b) x (a-b) = aa – ab – ba + bb = a² – 2ab + b²</li>
        <li>(a-b) x (a+b) = aa + ab – ba – bb = a² - b²</li>
    </ul>

    <h4><a href="cours/ecrituresLitterales.pdf" target=_blank/>Télécharger le cours en PDF</a></h4>
    <h4><a href="EL_quiz.php" target=_blank/>Accès au quiz</a></h4>

</main>

<?php
    include_once("footer.php");
?>
