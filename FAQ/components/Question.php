<?php 
    $questions = array("Question 1", "Question 2", "Question 3", "Question 4", "Question 5");
    $answers = array("Answer 1", "Answer 2", "Answer 3", "Answer 4", "Answer 5");
    $theme = array("theme 1", "theme 2", "theme 3", "theme 4", "theme 5");
    echo"<div>";
    foreach ($theme as $theme) {
        echo "<div class='flex-question'>". $theme;
        foreach ($questions as $question) {//$questions is an array
            echo "<div class='flex-question'><div class='question'>" . $question . "</div>";
            echo "<div class='answer'>" . "Answer to " . $question . "</div>";
            echo "<form>";
            echo "<button type='submit' id='question_$question' class='button-add'>Réponse</button>";
            echo "</form></div>";
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
        color: white;
          background-color: transparent;
          font-family: Quicksand, sans-serif;
          color: black;
          font-size: 20px;
          display: block;
          margin: 10px 0px;
          text-decoration: none;
          padding: 5px;
    }
</style>