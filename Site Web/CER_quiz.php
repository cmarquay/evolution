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
        0=>"√(-2 x -2) =",
        1=>"√(16/49) =",
        2=>"√(49 x 25) =",
        3=>"√(5929)² =",
        4=>"Si x² = 64, alors",
        5=>"√(20) x √(17) =",
        6=>"√(15) / √(28) =",
        7=>"1 / √(84) =",
        8=>"√(45) =",
        9=>"√(3/2) ="
    );
    $reponse1 = array(
        0=>"√(-2) x √(-2)",
        1=>"√(49) x √(1/16)",
        2=>"7/5",
        3=>"5929",
        4=>"l'équation n'a pas de solution",
        5=>"20√17",
        6=>"√(28/15)",
        7=>"2√21 / 42",
        8=>"9√(5)",
        9=>"9/4"
    );
    $reponse2 = array(
        0=>"2",
        1=>"7/4",
        2=>"5/7",
        3=>"77",
        4=>"l'équation admet une solution : x = 64",
        5=>"√340",
        6=>"5/7",
        7=>"√(84) / 84²",
        8=>"5√3",
        9=>"2√(3) / 2"
    );
    $reponse3 = array(
        0=>"-2√(-2)",
        1=>"4/7",
        2=>"7√5",
        3=>"2965",
        4=>"l'équation admet une solution : x = 8",
        5=>"17√20",
        6=>"√(15/28)",
        7=>"√(28) / 28",
        8=>"3√5",
        9=>"3√(2) / 2"
    );
    $reponse4 = array(
        0=>"est impossible, la racine carrée n'est définie que pour les nombres positifs",
        1=>"√(16) x √(49)",
        2=>"35",
        3=>"1976",
        4=>"l'équation admet deux solutions : x = -8 et x = 8",
        5=>"5√68",
        6=>"5/√(28)",
        7=>"√2 / 2",
        8=>"5√9",
        9=>"√(6) / 2"
    );
    $valide = array(
        0=>2,
        1=>3,
        2=>4,
        3=>1,
        4=>4,
        5=>2,
        6=>3,
        7=>1,
        8=>3,
        9=>4
    );

    $quiz=0;
    $points=0;
    if(isset($_POST["send"])) {
        $quiz=$_SESSION["quiz"];
        ++$quiz;
        $points=$_SESSION["points"];
        if (isset($_POST["CERquiz"]) && !empty($_POST["CERquiz"]) && $_POST["CERquiz"]==$valide[$quiz-1]) {
            ++$points;
        }
    }
    $_SESSION["quiz"]=$quiz;
    $_SESSION["points"]=$points;
?>
    <main class="Quiz">
        <h2>Quiz calculs élémentaires sur les radicaux (racines carrées)</h2>
        <?php
        if($quiz<10) {
            echo "<h3>Question n°".($quiz+1)."</h3>
                <form method=\"post\" action=\"CER_quiz.php\">
                    <p>
                        $question[$quiz]<br />
                        <input type=\"radio\" name=\"CERquiz\" value=\"1\" id=\"1\" checked /> <label for=\"1\"> $reponse1[$quiz]</label><br />
                        <input type=\"radio\" name=\"CERquiz\" value=\"2\" id=\"2\" /> <label for=\"2\"> $reponse2[$quiz]</label><br />
                        <input type=\"radio\" name=\"CERquiz\" value=\"3\" id=\"3\" /> <label for=\"3\"> $reponse3[$quiz]</label><br />
                        <input type=\"radio\" name=\"CERquiz\" value=\"4\" id=\"4\" /> <label for=\"4\"> $reponse4[$quiz]</label>
                    </p>
                    <input type=\"submit\" name=\"send\" value=\"Envoyer\" />
                </form>";
        } else {
            echo "<p>Bravo, vous êtes arrivés au terme de ce quiz !</p>
                <p>Vous avez obtenu $points points sur 10 possibles.</p>";
            $_SESSION["quiz"]=0;
            $_SESSION["points"]=0;
            echo "<p><a href=\"CER_quiz.php\">Recommencer une partie ?</a></p>";
        }
        ?>
    </main>
<?php
include_once("footer.php");
?>