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
    <div class="login-box">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>Êtes-vous sûr de vouloir vous déconnecter ?</p>
        <div class="button">
            <button type="submit" name="confirm" value="yes">Oui</button>
            <button type="submit" name="confirm" value="no">Non</button>
        </div>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
            // Destroy the session and redirect to the homepage
            // Unset all session variables, destroy the session, and then redirect to the homepage
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            session_unset();
            session_destroy();
            // Redirect to the homepage after logout
            header('Location: ../../index.php');
            exit();
            } else {
            // Redirect to the homepage if user cancels logout
            header('Location: ../../index.php');
            exit();
            }
        }
    ?>       
    </div>
</body>
</html>