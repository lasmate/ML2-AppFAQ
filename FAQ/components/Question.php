<?php 
$IDQ = $IDfaq = $questions = $reponses = $Qdate = $Adate = $IDuser = [];
foreach ($faqdata as $row) {
    $IDQ[] = $row['id_Q'];
    $IDfaq[] = $row['id_FAQ'];
    $questions[] = $row['question'];
    $reponses[] = $row['reponse'];
    $Qdate[] = $row['dat_question'];
    $Adate[] = $row['dat_reponse'];
    $IDuser[] = $row['id_user'];
}
echo "<div>";
for ($i = 0; $i < count($faqdata); $i++) {
    echo "<div class='flex-question'>";
    echo "<form class='question-form' method='post'>";
    echo "<div class='question'>" . htmlspecialchars_decode($questions[$i], ENT_QUOTES) . "<br><span style='font-weight:150;font-size:0.9em;'>" . htmlspecialchars($Qdate[$i], ENT_QUOTES) . "</span></div>";
    echo "<p>Utilisateur : " . htmlspecialchars($IDuser[$i], ENT_QUOTES) . "</p>";
    if (empty($reponses[$i])) { // Gestion des erreurs s'il n'y a pas de réponse
        echo "<input type='hidden' name='reponse_message' value='Aucune réponse disponible.'>";
    } else {
        echo "<div class='reponse'>" . htmlspecialchars_decode($reponses[$i], ENT_QUOTES) . "<br><span style='font-weight:150;font-size:0.7em;'>" . htmlspecialchars($Adate[$i], ENT_QUOTES) . "</span></div>";
    }
    echo "<input type='hidden' name='IDquestion' value='" . htmlspecialchars($IDQ[$i], ENT_QUOTES) . "'>";// ID de la question
    echo "<input type='hidden' name='question_id' value='" . htmlspecialchars($IDfaq[$i], ENT_QUOTES) . "'>"; // ID pour quelle ligue est la question
    echo "<input type='hidden' name='id_user' value='" . htmlspecialchars($IDuser[$i], ENT_QUOTES) . "'>"; // ID de l'utilisateur
    echo "<input type='hidden' name='dat_question' value='" . htmlspecialchars($Qdate[$i], ENT_QUOTES) . "'>"; // date de la question
    echo "<input type='hidden' name='dat_reponse' value='" . htmlspecialchars($Adate[$i], ENT_QUOTES) . "'>"; // date de la réponse
    if($_SESSION["id_usertype"]    !='3'){
        echo "<button type='button' class='button-add modify-button' data-id='" . htmlspecialchars($IDQ[$i], ENT_QUOTES) . "'>Repondre/Modifier</button>";
        echo "<button type='button' class='button-add delete-button' data-id='" . htmlspecialchars($IDQ[$i], ENT_QUOTES) . "'>Supprimer</button>";
    }
    echo "</form>";
    echo "</div>";
}
echo "</div>";
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                window.location.href = `FAQModification/msgdel.php?id=${id}`;
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modifyButtons = document.querySelectorAll('.modify-button');
        modifyButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                window.location.href = `FAQModification/msgmod.php?id=${id}`;
            });
        });
    });
</script>