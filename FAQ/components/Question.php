<?php 
    
//Example data
    // $faqdata = array(
    //             array(
    //                 'id_faq' => 1,
    //                 'question' => "Quand est-ce qu'il est le prochain tournoi ?",
    //                 'reponse' => "Le prochain tournoi est dans 3 semaines.",
    //                 'dat_question' => "2025-02-04 14:04:41",
    //                 'dat_reponse' => "2025-02-04 14:04:41",
    //                 'id_user' => 3
    //             ),
    //             array(
    //                 'id_faq' => 2,
    //                 'question' => "Où se trouve le prochain tournoi ?",
    //                 'reponse' => "Il se trouve à Toulouse.",
    //                 'dat_question' => "2025-02-04 14:06:02",
    //                 'dat_reponse' => "2025-02-04 14:06:02",
    //                 'id_user' => 2
    //             ),
    //             array(
    //                 'id_faq' => 3,
    //                 'question' => "Qu'elle est l'enjeux du prochain tournoi ?",
    //                 'reponse' => "L'enjeux du prochain tournoi se sera les championnats de France.",
    //                 'dat_question' => "2025-02-04 14:09:41",
    //                 'dat_reponse' => "2025-02-04 14:09:41",
    //                 'id_user' => 1
    //             )
    //         );

    $questions = array_column($faqdata, 'question');
    $answers = array_column($faqdata, 'reponse');
    $IDquestion = array_column($faqdata, 'id_faq');
    $Qdate = array_column($faqdata, 'dat_question');
    $Adate = array_column($faqdata, 'dat_reponse');
    $IDuser = array_column($faqdata, 'id_user');
    echo "<div>";
    for ($i = 0; $i < count($faqdata); $i++) {
        echo "<div class='flex-question'>";
        echo "<form class='question-form' action='FAQModification/msgmodif.php' method='post'>";
        echo "<div class='question'>" . htmlspecialchars($questions[$i], ENT_QUOTES) . "<br><span style='font-weight:150;font-size:0.9em;'>" . htmlspecialchars($Qdate[$i], ENT_QUOTES) . "</span></div>";
        echo "<div class='answer'>" . htmlspecialchars($answers[$i], ENT_QUOTES) . "<br><span style='font-weight:150;font-size:0.7em;'>" . htmlspecialchars($Adate[$i], ENT_QUOTES) . "</span></div>";
        echo "<input type='hidden' name='IDquestion' value='" . htmlspecialchars($IDquestion[$i], ENT_QUOTES) . "'>";
        echo "<input type='hidden' name='question' value='" . htmlspecialchars($questions[$i], ENT_QUOTES) . "'>";
        echo "<input type='hidden' name='description' value='" . htmlspecialchars($Qdate[$i], ENT_QUOTES) . "'>"; // updated to use the correct variable
        echo "<input type='hidden' name='answer' value='" . htmlspecialchars($answers[$i], ENT_QUOTES) . "'>";
        echo "<input type='hidden' name='id_user' value='" . htmlspecialchars($IDuser[$i], ENT_QUOTES) . "'>"; // added to store user ID
        echo "<input type='hidden' name='dat_question' value='" . htmlspecialchars($Qdate[$i], ENT_QUOTES) . "'>"; // added to store question date
        echo "<input type='hidden' name='dat_reponse' value='" . htmlspecialchars($Adate[$i], ENT_QUOTES) . "'>"; // added to store answer date
        echo "<input type='hidden' name='question_id' value='" . htmlspecialchars($IDquestion[$i], ENT_QUOTES) . "'>"; // added to store question ID again for clarity
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