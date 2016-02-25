<?php
session_start();

/*J'initialise mes tableaux*/
$question = array(
    0=>"Que se passe-t-il si on ajoute le même nombre aux deux membres d'une inéquation ?",
    1=>"Si 8x + 5 = 13, alors",
    2=>"Si x est inférieur à 9, alors",
    3=>"Si (2x+1)(x+7) = 0, alors",
    4=>"Si x + 12 = 5, alors",
    5=>"Si 5x = 4, alors",
    6=>"Si 4 / x = 8, alors",
    7=>"Si a = 0 et x² = a, alors",
    8=>"Si x + 5 = -4x - 5, alors",
    9=>"Si 2x(3 + 5) = -4x - (6 + 5), alors"
);
$reponse1 = array(
    0=>"l'inéquation change de sens",
    1=>"x = -3",
    2=>"x est supérieur à -9",
    3=>"l'équation admet deux solutions : x = (-1/2) et x = -7",
    4=>"x = 17",
    5=>"x = 4/5",
    6=>"x = 2",
    7=>"l'équation admet une infinité de solutions",
    8=>"x = 0",
    9=>"x = 11/20"
);
$reponse2 = array(
    0=>"l'ensemble des solutions est augmenté de ce nombre",
    1=>"x = 1",
    2=>"(x-4) est supérieur à 5",
    3=>"l'équation admet deux solutions : x = (1/2) et x = -7",
    4=>"x = -7",
    5=>"x = 5/4",
    6=>"x = 4",
    7=>"l'équation n'admet pas de solution",
    8=>"x = -2",
    9=>"x = -11/12"
);
$reponse3 = array(
    0=>"l'inéquation ne change pas de sens",
    1=>"x = -1",
    2=>"x est inférieur à -9",
    3=>"l'équation admet deux solutions : x = (-1/2) et x = 7",
    4=>"x = -5",
    5=>"x = -4/5",
    6=>"x = -4",
    7=>"l'équation admet une solution : x = 0",
    8=>"x = -5",
    9=>"x = 11/12"
);
$reponse4 = array(
    0=>"l'inéquation devient nulle",
    1=>"x = 3",
    2=>"(x-4) est inférieur à 5",
    3=>"l'équation n'admet pas de solution",
    4=>"x = -17",
    5=>"x = -5/4",
    6=>"x = 1/2",
    7=>"l'équation admet deux solutions : x = -a et x = a",
    8=>"x = 5",
    9=>"x = -11/20"
);
$valide = array(
    0=>3,
    1=>2,
    2=>4,
    3=>1,
    4=>2,
    5=>1,
    6=>4,
    7=>3,
    8=>2,
    9=>4
);

$quiz=0;
$points=0;
if(isset($_POST["send"])) {
    $quiz=$_SESSION["quiz"];
    ++$quiz;
    $points=$_SESSION["points"];
    if (isset($_POST["EIquiz"]) && !empty($_POST["EIquiz"]) && $_POST["EIquiz"]==$valide[$quiz-1]) {
        ++$points;
    }
}
$_SESSION["quiz"]=$quiz;
$_SESSION["points"]=$points;

$titre = "Quiz";
include_once("header.php");
?>
    <main class="Quiz">
        <h2>Quiz équations et inéquations du premier degré</h2>
        <?php
        if($quiz<10) {
            echo "<h3>Question n°".($quiz+1)."</h3>
                <form method=\"post\" action=\"EI_quiz.php\">
                    <p>
                        $question[$quiz]<br />
                        <input type=\"radio\" name=\"EIquiz\" value=\"1\" id=\"1\" checked /> <label for=\"1\"> $reponse1[$quiz]</label><br />
                        <input type=\"radio\" name=\"EIquiz\" value=\"2\" id=\"2\" /> <label for=\"2\"> $reponse2[$quiz]</label><br />
                        <input type=\"radio\" name=\"EIquiz\" value=\"3\" id=\"3\" /> <label for=\"3\"> $reponse3[$quiz]</label><br />
                        <input type=\"radio\" name=\"EIquiz\" value=\"4\" id=\"4\" /> <label for=\"4\"> $reponse4[$quiz]</label>
                    </p>
                    <input type=\"submit\" name=\"send\" value=\"Envoyer\" />
                </form>";
        } else {
            echo "<p>Bravo, vous êtes arrivés au terme de ce quiz !</p>
                <p>Vous avez obtenu $points points sur 10 possibles.</p>";
            $_SESSION["quiz"]=0;
            $_SESSION["points"]=0;
            echo "<p><a href=\"EI_quiz.php\">Recommencer une partie ?</a></p>";
        }
        ?>
    </main>
<?php
include_once("footer.php");
?>