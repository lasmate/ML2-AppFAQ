<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    include "../components/session_handler.php"; 
    include "../components/header.php"; 
    $id_Q = isset($_GET['id']) ? $_GET['id'] : null;
    checkUserSessionAccess($_SESSION('id_ligue'));
    $msgdata = fetchMessage($id_Q);
    ?>
</head>
<body>
<div  class="magicpattern">
    <div class="flex-title"> FAQ Modification </div>
    <?php include "../components/navbar.php"; ?>
    <?php
        // Update the question and answer in the database
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['question'])) {
            $question = htmlspecialchars($_POST['question']);
            $reponse = htmlspecialchars($_POST['reponse']);
            if (!empty($question) && !empty($reponse)) {
                // Call the updateMessage function from msglist.php
                if (function_exists('modMessage')) {
                    modMessage($id_Q, $question);
                } else {
                    echo "<p>Erreur: la fonction modMessage n'est pas définie.</p>";
                }
                echo "<p>Message mis à jour avec succès!</p>";
            } else {
                echo "<p>Erreur: la question et la réponse ne peuvent pas être vides.</p>";
            }
        }
        ?>


    <div class="form-container">
        <p>Modifiez la question et la réponse ci-dessous.</p>
        <form method="post">
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" value="<?php echo isset($msgdata['question']) ? htmlspecialchars($msgdata['question']) : ''; ?>" required>

            <label for="reponse">reponse:</label>
            <textarea id="reponse" name="reponse" rows="4"><?php echo isset($msgdata['reponse']) ? htmlspecialchars($msgdata['reponse']) : ''; ?></textarea>
            
            <button type="submit">Valider</button>
            <button type="reset">Annuler</button>
        </form>   
    </div>
    <?php include '../components/footer.php';?></div> 
</body>

</html>