<?php 
    $questions = array("Quand sera le prochain tournis?", "y'a-il des maillot fourni par la", "Question 3", "Question 4", "Question 5");
    $answers = array("Answer 1", "Answer 2", "Answer 3", "Answer 4", "Answer 5");
    $description = array("Jaimerais savoir quand ce passera le procain tournois, j'ai vu passer un mail qui disais que ca serai la semaine prochaine mais notre entraineur a dit que cetait dans 2 mois ", "Description 2", "Description 3", "Description 4", "Description 5");
    $theme = array("theme 1", "theme 2", "theme 3", "theme 4", "theme 5");
    echo"<div>";
    foreach ($theme as $singleTheme) {
        echo "<div class='flex-question'>". $theme;
        for ($i = 0; $i < count($questions); $i++)
        {
            if ($theme[$i] === $singleTheme) {
                echo "<form class='question-form'>";
                echo "<div class='question'>" . $questions[$i] . "</div>";
                echo "<div class='description'>" . $description[$i] . "</div>";
                echo "<button type='button' class='button-add'>Answer</button>";
                echo "<div class='answer'>" . $answers[$i] . "</div>";
                echo "</form>";
            }
        }

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