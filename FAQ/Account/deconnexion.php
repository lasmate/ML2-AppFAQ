<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponso'Ligue</title>
    <link rel="stylesheet" href="../../style/main.css">
    <link rel="stylesheet" href="../../style/account.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
</head>
<body>
    <div class="flex-title"> Déconnexion </div>
    <div class="flex-container">

        <div class="flex-nav"> <a href="../../index.php">Accueil</a></div>
        <div class="flex-nav" id="FAQ"><p> FAQ </p>
                <div class="flex-nav-Column"> <a href="../FAQBask.php">Basket</a></div>
                <div class="flex-nav-Column"> <a href="../FAQFoot.php">Football</a></div>
                <div class="flex-nav-Column"> <a href="../FAQHand.php">Handball</a></div>
                <div class="flex-nav-Column"> <a href="../FAQVolle.php">Volley</a></div>
        </div>
        <div class="flex-nav" id="Account"><p> Compte </p> 
                <div class="flex-nav-Column"> <a href="inscription.php">Inscription</a></div>
                <div class="flex-nav-Column"> <a href="connexion.php">Connexion</a></div>
                <div class="flex-nav-Column"> <a href="deconnexion.php">Déconnexion</a></div>
        </div>
    </div>
    <div class="flex-page">
    <form action="./deconnexion.php" method="post">
        <p>Êtes-vous sûr de vouloir vous déconnecter ?</p>
        <button type="submit" name="confirm" value="yes">Oui</button>
        <button type="submit" name="confirm" value="no">Non</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
        // Start the session if it is not already started, unset all session variables, destroy the session, and redirect to the homepage
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_unset();
        session_destroy();
        // Redirect to the homepage
        // Redirect to the homepage if the user cancels logout
        header('Location: ../../index.php');
        exit();
        } elseif (isset($_POST['confirm']) && $_POST['confirm'] === 'no') {
        // Redirect to another page if user cancels logout
        header('Location: ../../index.php');
        exit();
        }
    }
    ?>       
    </div>
</body>
</html>