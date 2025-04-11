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

<body class="magicpattern">
    <div class="flex-title"> FAQ Basket </div>
    <?php include_once "../components/navbar.php"; ?>

    <div class="login-box">
        <?php
        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['delete'])) {
                if ($_POST['delete'] === 'yes') {
                    // Call the deleteMessage function from msglist.php
                    if (function_exists('delMessage')) {
                        delMessage($id_Q);
                    } else {
                        echo "<p>Erreur: la fonction delMessage n'est pas définie.</p>";
                    }
                    echo "<p>Message supprimé avec succès!</p>";
                } else {
                    echo "<p>Suppression du message annulée.</p>";
                }
            }
        }
        ?>
        <div class="delete-box">
            <h2>Supprimer le Message</h2>
                <p class="delete-message">Êtes-vous sûr de vouloir supprimer ce message:</p>
                <p class="delete-message"><?php echo $msgdata['question']; ?></p>
                <form method="post">
                    <div class="button-group">
                        <button type="submit" name="delete" value="yes" class="button-add" style="background-color:red">Oui, Supprimer</button>
                        <button type="submit" name="delete" value="no" class="button-add">Non, Annuler</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../components/footer.php'; ?>
</body>
</html>