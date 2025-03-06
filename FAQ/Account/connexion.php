<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<link rel="stylesheet" href="../../style/account.css">
</head>
<body class="magicpattern">
<div class="flex-title">Inscription</div>
<?php require_once "../components/navbarbis.php"; ?>
    <div class="flex-page">
    <div class="login-box">
        <form action="../components/login_process.php" method="post">
        <div class="textbox">
            <label for="username">Pseudo:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="textbox">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Se souvenir de moi</label>
        </div>
        <div class="button">
            <button type="submit">Se connecter</button>
        </div>
        </form>
      
    </div>
</body>
</html>