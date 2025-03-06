<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<link rel="stylesheet" href="../../style/account.css">
</head>
<body class="magicpattern">
<div class="flex-title">Déconnexion</div>
<?php require_once "../components/navbarbis.php"; ?>
    <div class="flex-page">
    <form action="../deconnexion.php" method="post">
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
        header('Location: ../index.php');
        exit();
        } elseif (isset($_POST['confirm']) && $_POST['confirm'] === 'no') {
        // Redirect to another page if user cancels logout
        header('Location: ../index.php');
        exit();
        }
    }
    ?>       
    </div>
</body>
</html>