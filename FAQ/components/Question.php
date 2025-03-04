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

    echo "<div>";
    for ($i = 0; $i < count($questions); $i++) {
        echo "<div class='flex-question'>";
        echo "<form class='question-form' action='FAQModification/msgmodif.php' method='post'>";
        echo "<div class='question'>" . $questions[$i] . "</div>";
        echo "<div class='description'>" . $description[$i] . "</div>";
        echo "<input type='hidden' name='IDquestion' value='" . $IDquestion[$i] . "'>";
        echo "<input type='hidden' name='question' value='" . htmlspecialchars($questions[$i], ENT_QUOTES) . "'>";
        echo "<input type='hidden' name='description' value='" . htmlspecialchars($description[$i], ENT_QUOTES) . "'>";
        echo "<input type='hidden' name='answer' value='" . htmlspecialchars($answers[$i], ENT_QUOTES) . "'>";
        echo "<button type='submit' class='button-add'>Answer</button>";
        echo "<div class='answer'>" . $answers[$i] . "</div>";
        echo "</form>";
        echo "</div>";
    }
    echo "</div>";
?>
<style>
    .flex-question {
        display: flex;
        flex-direction: column;
        margin: 10px;
        padding: 10px;
        border: 1px solid black;
    }
    .question {
        font-weight: bold;
    }
    .answer {
        font-style: italic;
    }
    .button-add {
          background-color: transparent;
          font-family: Quicksand, sans-serif;
          color: black;
          font-size: 20px;
          display: block;
          margin: 10px 0px;
          text-decoration: none;
          padding: 5px;
          padding: 5px;
    }
</style>