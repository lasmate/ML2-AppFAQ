<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once '../components/header.php'; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<link rel="stylesheet" href="../../style/account.css">
</head>
<body class="magicpattern">
<div class="flex-title">Inscription</div>
<?php require_once '../components/navbarbis.php'; ?>
    <div class="flex-page">
    <div class="login-box">
        <form action="../components/register_process.php" method="post">
            <p>Sport (sélectionner en 1)</p>
            <div class="radio-group" >
                <div class="radio-option" >
                    <input type="radio" id="football" name="ligue" value="1" required>
                    <label for="football">Football</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="basket" name="ligue" value="2">
                    <label for="basket">Basket</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="volleyball" name="ligue" value="3">
                    <label for="volleyball">Volleyball</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="handball" name="ligue" value="4">
                    <label for="handball">Handball</label>
                </div>
            </div>
        <div class="margin-separator"></div>
        <div class="textbox">
            <label for="username">Pseudo:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="textbox">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div> 
        <div class="textbox">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="textbox">
            <label for="confirm_password">Confirmer le mot de passe:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="button">
            <button type="submit">S'inscrire</button>
        </div>
        </form>

    </div>
</body>
</html>