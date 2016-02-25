<?php
    session_start();

    /*J'initialise mes tableaux*/
    $question = array(
        0=>"(4/3)/(5/4) =",
        1=>"4 par rapport à 12",
        2=>"Comment multiplie-t-on deux nombres rationnels ?",
        3=>"Quel est l'inverse de 5/2 ?",
        4=>"Comment soustrait-on deux nombres relatifs ?",
        5=>"PGCD(20,15)",
        6=>"Comment simplifier 36/63 ?",
        7=>"PGCD(80,68)",
        8=>"Lequel est divisible par 7 ?",
        9=>"PGCD(24,16)"
    );
    $reponse1 = array(
        0=>"16/15",
        1=>"est un multiple",
        2=>"On multiplie les deux numérateurs entre eux et les deux dénominateurs entre eux",
        3=>"-5/2",
        4=>"On additionne le premier avec l'inverse du second",
        5=>"2",
        6=>"4/9",
        7=>"8",
        8=>"81",
        9=>"4"
    );
    $reponse2 = array(
        0=>"4/5",
        1=>"est un diviseur",
        2=>"On multiplie le numérateur du premier avec le dénominateur du second et le numérateur du second avec le dénominateur du premier",
        3=>"-5/-2",
        4=>"On additionne le premier avec l'opposé du second",
        5=>"3",
        6=>"6/9",
        7=>"4",
        8=>"72",
        9=>"2"
    );
    $reponse3 = array(
        0=>"20/12",
        1=>"est divisible",
        2=>"On additionne les deux numérateurs entre eux et on multiplie les deux dénominateurs entre eux",
        3=>"2/5",
        4=>"On soustrait le premier avec l'inverse du second",
        5=>"4",
        6=>"4/7",
        7=>"6",
        8=>"91",
        9=>"6"
    );
    $reponse4 = array(
        0=>"5/3",
        1=>"est le PGCD",
        2=>"On multiplie les deux dénominateurs entre eux et on additionne les deux dénominateurs entre eux",
        3=>"-2/5",
        4=>"On soustrait le premier avec l'opposé du second",
        5=>"5",
        6=>"6/7",
        7=>"2",
        8=>"87",
        9=>"8"
    );
    $valide = array(
        0=>1,
        1=>2,
        2=>1,
        3=>3,
        4=>2,
        5=>4,
        6=>3,
        7=>2,
        8=>3,
        9=>4
    );

    $quiz=0;
    $points=0;
    if(isset($_POST["send"])) {
        $quiz=$_SESSION["quiz"];
        ++$quiz;
        $points=$_SESSION["points"];
        if (isset($_POST["ERquiz"]) && !empty($_POST["ERquiz"]) && $_POST["ERquiz"]==$valide[$quiz-1]) {
            ++$points;
        }
    }
    $_SESSION["quiz"]=$quiz;
    $_SESSION["points"]=$points;

    $titre = "Quiz";
    include_once("header.php");
?>
<main class="Quiz">
    <h2>Quiz nombres entiers et rationnels</h2>
    <?php
        if($quiz<10) {
            echo "<h3>Question n°".($quiz+1)."</h3>
                <form method=\"post\" action=\"ER_quiz.php\">
                    <p>
                        $question[$quiz]<br />
                        <input type=\"radio\" name=\"ERquiz\" value=\"1\" id=\"1\" checked /> <label for=\"1\"> $reponse1[$quiz]</label><br />
                        <input type=\"radio\" name=\"ERquiz\" value=\"2\" id=\"2\" /> <label for=\"2\"> $reponse2[$quiz]</label><br />
                        <input type=\"radio\" name=\"ERquiz\" value=\"3\" id=\"3\" /> <label for=\"3\"> $reponse3[$quiz]</label><br />
                        <input type=\"radio\" name=\"ERquiz\" value=\"4\" id=\"4\" /> <label for=\"4\"> $reponse4[$quiz]</label>
                    </p>
                    <input type=\"submit\" name=\"send\" value=\"Envoyer\" />
                </form>";
        } else {
            echo "<p>Bravo, vous êtes arrivés au terme de ce quiz !</p>
                <p>Vous avez obtenu $points points sur 10 possibles.</p>";
            $_SESSION["quiz"]=0;
            $_SESSION["points"]=0;
            echo "<p><a href=\"ER_quiz.php\">Recommencer une partie ?</a></p>";
        }
    ?>
</main>
<?php
    include_once("footer.php");
?>