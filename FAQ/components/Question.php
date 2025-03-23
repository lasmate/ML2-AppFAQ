<?php 
    
// Tableau
// (
//     [0] => Array
//         (
//             [id_Q] => 1
//             [id_FAQ] => 1
//             [question] => Quand est-ce qu'il est le prochain tournoi ? 
//             [reponse] => Le prochain tournoi est dans 3 semaines.
//             [dat_question] => 2025-02-04 14:04:41
//             [dat_reponse] => 2025-02-04 14:04:41
//             [id_user] => 3
//         )

//     [1] => Array
//         (
//             [id_Q] => 2
//             [id_FAQ] => 2
//             [question] => O� se trouve le prochain tournoi ?
//             [reponse] => Il se trouve � Toulouse.
//             [dat_question] => 2025-02-04 14:06:02
//             [dat_reponse] => 2025-02-04 14:06:02
//             [id_user] => 2
//         )

//     [2] => Array
//         (
//             [id_Q] => 3
//             [id_FAQ] => 3
//             [question] => Qu'elle est l'enjeux du prochain tournoi ?
//             [reponse] => L'enjeux du prochain tournoi se sera les championnats de France.
//             [dat_question] => 2025-02-04 14:09:41
//             [dat_reponse] => 2025-02-04 14:09:41
//             [id_user] => 1
//         )

//     [3] => Array
//         (
//             [id_Q] => 4
//             [id_FAQ] => 5
//             [question] => j'aimerai savoir quand se passera le tournoi de basket
//             [reponse] => 
//             [dat_question] => 2025-03-05 16:10:43
//             [dat_reponse] => 2025-03-05 16:10:43
//             [id_user] => 1
//         )

//     [4] => Array
//         (
//             [id_Q] => 5
//             [id_FAQ] => 2
//             [question] => combien de panier on ete marque pas le numero 6 cette saison? 
//             [reponse] => 
//             [dat_question] => 2025-03-11 15:37:34
//             [dat_reponse] => 2025-03-11 15:37:34
//             [id_user] => 3
//         )

//     [5] => Array
//         (
//             [id_Q] => 6
//             [id_FAQ] => 1
//             [question] => prochain tournois ?
//             [reponse] => 
//             [dat_question] => 2025-03-18 11:20:28
//             [dat_reponse] => 2025-03-18 11:20:28
//             [id_user] => 2
//         )

// )
    
$IDQ = array_column($faqdata, 'id_Q');
$IDfaq = array_column($faqdata, 'id_FAQ');
$questions = array_column($faqdata, 'question');
$reponses = array_column($faqdata, 'reponse');
$Qdate = array_column($faqdata, 'dat_question');
$Adate = array_column($faqdata, 'dat_reponse');
$IDuser = array_column($faqdata, 'id_user');
echo "<div>";
for ($i = 0; $i < count($faqdata); $i++) {
    echo "<div class='flex-question'>";
    echo "<form class='question-form' action='FAQModification/msgmod.php' method='post'>";
    echo "<div class='question'>" . htmlspecialchars($questions[$i], ENT_QUOTES) . "<br><span style='font-weight:150;font-size:0.9em;'>" . htmlspecialchars($Qdate[$i], ENT_QUOTES) . "</span></div>";
    if (empty($reponses[$i])) { // Gestion des erreurs s'il n'y a pas de réponse
    if (empty($reponses[$i])) {
        echo "<input type='hidden' name='reponse_message' value='Aucune réponse disponible.'>";
    } else {
        echo "<div class='reponse'>" . htmlspecialchars($reponses[$i], ENT_QUOTES) . "<br><span style='font-weight:150;font-size:0.7em;'>" . htmlspecialchars($Adate[$i], ENT_QUOTES) . "</span></div>";
    }

    echo "<input type='hidden' name='IDquestion' value='" . htmlspecialchars($IDQ[$i], ENT_QUOTES) . "'>";// ID de la question
    echo "<input type='hidden' name='question_id' value='" . htmlspecialchars($IDfaq[$i], ENT_QUOTES) . "'>"; // ID pour quelle ligue est la question
    echo "<input type='hidden' name='question' value='" . htmlspecialchars($questions[$i], ENT_QUOTES) . "'>";// question
    echo "<input type='hidden' name='reponse' value='" . htmlspecialchars($reponses[$i], ENT_QUOTES) . "'>";// reponse
    echo "<input type='hidden' name='id_user' value='" . htmlspecialchars($IDuser[$i], ENT_QUOTES) . "'>"; // ID de l'utilisateur
    echo "<input type='hidden' name='dat_question' value='" . htmlspecialchars($Qdate[$i], ENT_QUOTES) . "'>"; // date de la question
    echo "<input type='hidden' name='dat_reponse' value='" . htmlspecialchars($Adate[$i], ENT_QUOTES) . "'>"; // date de la réponse
    
    echo "<button type='submit' class='button-add'>Repondre/Modifier</button>";
    echo "</form>";
    echo "</div>";
}
echo "</div>";
}
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

    .description, .reponse {
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

    .reponse {
 
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