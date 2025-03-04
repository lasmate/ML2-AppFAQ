<?php 
    $questions = array("Quand sera le prochain tournis?", "y'a-il des maillot fourni par la", "Question 3", "Question 4", "Question 5");
    $answers = array("Answer 1", "Answer 2", "Answer 3", "Answer 4", "Answer 5");
    $description = array("Description 1", "Description 2", "Description 3", "Description 4", "Description 5");
    $theme = array("theme 1", "theme 2", "theme 3", "theme 4", "theme 5");
    echo"<div>";
    foreach ($theme as $singleTheme) {
        echo "<div class='flex-question'>". $theme;
        foreach ($questions as $question) {//$questions is an array
            echo "<div class='flex-question'><div class='question'>" . $question . "</div>";
            echo "<div class='flex-question'><div class='description'>" . "Description to " . $question . "</div></div>";
            echo "<form>";
            $index = array_search($question, $questions);
            echo "<div class='answer'>{$answers[$index]}</div>";

            echo "<form action='FAQModification/msgmodif.php' method='post'>";
            echo "<input type='hidden' name='question' value='$question'>";
 echo "";
            echo "<button type='submit' id='question_$question' class='button-add'>Réponse</button>";
            echo "</form>";
            echo "<div class='flex-question'><div class='answer'>" . "Answer to " . $question . "</div></div></div>";
        }
        echo "</div>";
    }
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