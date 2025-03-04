<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
</head>
<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title"> FAQ Basket </div>
    <?php include "../components/navbar.php"; ?>
<div class="flex-title"> Deconnetion </div>
    <div class="flex-container">
    <div class="flex-nav" onclick="location.href='../../index.php';">Acceuil</div>
    <div class="flex-nav" id="FAQ"><p> FAQ </p>
        <div class="flex-nav-Column" onclick="location.href='../FAQBask.php';">Basket</div>
        <div class="flex-nav-Column" onclick="location.href='../FAQFoot.php';">Football</div>
        <div class="flex-nav-Column" onclick="location.href='../FAQHand.php';">Handball</div>
        <div class="flex-nav-Column" onclick="location.href='../FAQVolle.php';">Volley</div>
    </div>
    <div class="flex-nav" id="Account"><p> Compte </p> 
        <div class="flex-nav-Column" onclick="location.href='inscription.php';">Inscription</div>
        <div class="flex-nav-Column" onclick="location.href='connexion.php';">Connexion</div>
        <div class="flex-nav-Column" onclick="location.href='deconnexion.php';">Deconnexion</div>
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