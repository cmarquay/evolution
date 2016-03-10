<?php
    $titre = "Quiz";
    include_once("header.php");

    if(!$sessionActive) {
        echo "<script type=\"text/javascript\">";
        echo "alert('Vous devez être connecté pour accéder aux quiz');";
        echo "window.history.back();";
        echo "</script>";
    }

    /*J'initialise mes tableaux*/
    $question = array(
        0=>"-2x² + 15x + x² + 6 - 15x =",
        1=>"Quel type d'opération faut-il avoir pour factoriser ?",
        2=>"Quel est le facteur commun dans (2x+1)(x²+6x-7) + (6x+3)(5x²+4x+2) ?",
        3=>"Quelle est la factorisation de (5x+2)(12x+4) + (5x+2)(-8x+3) ?",
        4=>"(a + b) (a - b) =",
        5=>"(2x+1)(x+5) =",
        6=>"Comment doit-on ordonner les puissances ?",
        7=>"(a + b)² =",
        8=>"2x(2x+4)",
        9=>"(a - b)² ="
    );
    $reponse1 = array(
        0=>"-3x² + 15x + 6",
        1=>"une somme",
        2=>"6x+3",
        3=>"(5x-2)(4x+7)",
        4=>"a² - 2ab + b²",
        5=>"2x² + 11x + 5",
        6=>"dans l'ordre croissant",
        7=>"a² + b²",
        8=>"4x²+8",
        9=>"a² + 2ab + b²"
    );
    $reponse2 = array(
        0=>"-x² + 6",
        1=>"une soustraction",
        2=>"4x+2",
        3=>"(5x+2)(4x-7)",
        4=>"a² - b²",
        5=>"11x² + 5x + 2",
        6=>"dans l'ordre alphabétique",
        7=>"a² - 2ab + b²",
        8=>"4x²+8x",
        9=>"a² + b²"
    );
    $reponse3 = array(
        0=>"x² + 6",
        1=>"une multiplication",
        2=>"6x-7",
        3=>"(5x-2)(4x-7)",
        4=>"a² + 2ab + b²",
        5=>"5x² + 2x + 11",
        6=>"dans l'ordre décroissant",
        7=>"a² - b²",
        8=>"4x+4x",
        9=>"a² - 2ab + b²"
    );
    $reponse4 = array(
        0=>"-2x² + 6",
        1=>"une division",
        2=>"2x+1",
        3=>"(5x+2)(4x+7)",
        4=>"a² + b²",
        5=>"5x² + 7x + 6",
        6=>"dans l'ordre anti-alphabétique",
        7=>"a² + 2ab + b²",
        8=>"4x+8",
        9=>"a² - b²"
    );
    $valide = array(
        0=>2,
        1=>1,
        2=>4,
        3=>4,
        4=>2,
        5=>1,
        6=>3,
        7=>4,
        8=>2,
        9=>3
    );

    $quiz=0;
    $points=0;
    if(isset($_POST["send"])) {
        $quiz=$_SESSION["quiz"];
        ++$quiz;
        $points=$_SESSION["points"];
        if (isset($_POST["ELquiz"]) && !empty($_POST["ELquiz"]) && $_POST["ELquiz"]==$valide[$quiz-1]) {
            ++$points;
        }
    }
    $_SESSION["quiz"]=$quiz;
    $_SESSION["points"]=$points;
?>
    <main class="Quiz">
        <h2>Quiz écritures littérales</h2>
        <?php
        if($quiz<10) {
            echo "<h3>Question n°".($quiz+1)."</h3>
                <form method=\"post\" action=\"EL_quiz.php\">
                    <p>
                        $question[$quiz]<br />
                        <input type=\"radio\" name=\"ELquiz\" value=\"1\" id=\"1\" checked /> <label for=\"1\"> $reponse1[$quiz]</label><br />
                        <input type=\"radio\" name=\"ELquiz\" value=\"2\" id=\"2\" /> <label for=\"2\"> $reponse2[$quiz]</label><br />
                        <input type=\"radio\" name=\"ELquiz\" value=\"3\" id=\"3\" /> <label for=\"3\"> $reponse3[$quiz]</label><br />
                        <input type=\"radio\" name=\"ELquiz\" value=\"4\" id=\"4\" /> <label for=\"4\"> $reponse4[$quiz]</label>
                    </p>
                    <input type=\"submit\" name=\"send\" value=\"Envoyer\" />
                </form>";
        } else {
            echo "<p>Bravo, vous êtes arrivés au terme de ce quiz !</p>
                <p>Vous avez obtenu $points points sur 10 possibles.</p>";
            $_SESSION["quiz"]=0;
            $_SESSION["points"]=0;
            echo "<p><a href=\"EL_quiz.php\">Recommencer une partie ?</a></p>";
        }
        ?>
    </main>
<?php
include_once("footer.php");
?>