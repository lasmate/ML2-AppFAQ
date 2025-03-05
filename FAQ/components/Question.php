<?php 
    $IDquestion = array(
        1, 
        2, 
        3, 
        4, 
        5
    );
    $questions = array(
        "Quand sera le prochain tournois?", 
        "y'a-il des maillot fourni par la co'op", 
        "Question 3", 
        "Question 4", 
        "Question 5"
    );
    $answers = array(
        "Answer 1", 
        "Answer 2", 
        "Answer 3", 
        "Answer 4", 
        "Answer 5"
    );
    $description = array(
        "J'aimerais savoir quand se passera le prochain tournoi. J'ai vu passer un mail qui disait que ce serait la semaine prochaine, mais notre entraîneur a dit que c'était dans 2 mois.", 
        "Description 2", 
        "Description 3", 
        "Description 4", 
        "Description 5"
    );
//  .$Prenom[$i].$Nom[$i].
    echo "<div>";
    for ($i = 0; $i < count($questions); $i++) {
        echo "<div class='flex-question'>";
        echo "<form class='question-form' action='FAQModification/msgmodif.php' method='post'>";
        echo "<div class='question'>" . $questions[$i] . "";
        echo "<div class='description'>" . $description[$i] . "</div>";
        echo "<div class='answer'>" . $answers[$i] . "</div></div>";
        echo "<input type='hidden' name='IDquestion' value='" . $IDquestion[$i] . "'>";
        echo "<input type='hidden' name='question' value='" . htmlspecialchars($questions[$i], ENT_QUOTES) . "'>";
        echo "<input type='hidden' name='description' value='" . htmlspecialchars($description[$i], ENT_QUOTES) . "'>";
        echo "<input type='hidden' name='answer' value='" . htmlspecialchars($answers[$i], ENT_QUOTES) . "'>";
        echo "<button type='submit' class='button-add'>Repondre/Modifier</button>";
        echo "</form>";
        echo "</div>";
    }
    echo "</div>";
?>
<style>
    .flex-question {
        background-color: rgba(255, 255, 255, 0.6);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        display: flex;
        max-width: 75vw;
        margin: 10px;
        padding: 20px;
    }

    .question {
        font-weight: bold;
        font-size: .8em;
    }

    .description, .answer {
        background-color: rgba(225, 225, 225, 0.6);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        margin-left: 10px;
        font-weight: normal;
        font-style: italic;
        padding: 10px;
    }
    .description {

        margin-top: 5px;
    }

    .answer {
 
        margin-top: 1vh;
        margin-left: 20px;
    }

    .button-add {
        background-color: rgba(225, 225, 225, 0.6);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 5px;
        margin: 10px 0;
        font-size: 1em;
        display: block;
    }

</style>