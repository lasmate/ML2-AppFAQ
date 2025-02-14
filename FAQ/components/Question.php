<?php 
    $questions = array("Question 1", "Question 2", "Question 3", "Question 4", "Question 5");
    $answers = array("Answer 1", "Answer 2", "Answer 3", "Answer 4", "Answer 5");
    echo"<div class='flex-question'>";
        foreach ($questions as $question) {//$questions is an array
            echo "<div class='question'>" . $question . "</div>";
            echo "<div class='answer'>" . "Answer to " . $question . "</div>";
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
</style>