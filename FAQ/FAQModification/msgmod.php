<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    const FAQ_ID = null;
    include "../components/session_handler.php"; 
    include "../components/header.php"; 
    checkUserSessionAccess(FAQ_ID);

    $id_Q = isset($_GET['id']) ? $_GET['id'] : null;
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
            $mots_cles = htmlspecialchars($_POST['mots_cles']);
            if (!empty($question) && !empty($reponse)) {
                // Call the updateMessage function from msglist.php
                if (function_exists('modMessage')) {
                    modMessage($id_Q, $question,$reponse, $mots_cles);
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
            
            <label for="mots-cles">Mots-cles</label>
            <textarea id="mots_cles" name="mots_cles" rows="4"><?php echo isset($msgdata['mots_cles']) ? htmlspecialchars($msgdata['mots_cles']) : ''; ?></textarea>

            <button type="submit">Valider</button>
            <button type="reset">Annuler</button>
        </form>   
    </div>
    <?php include '../components/footer.php';?></div> 
</body>
</html>