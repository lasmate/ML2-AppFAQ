<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<link rel="stylesheet" href="../../style/account.css">
</head>
<body>
<div class='parent'><div class="magicpattern"/>
<div class="flex-title">Inscription</div>
<?php require_once "../components/navbarbis.php"; ?>

    

    <div class="flex-page">

    <div class="login-box">
        <form action="login_process.php" method="post">
        <div class="textbox">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="textbox">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember me</label>
        </div>
        <div class="button">
            <button type="submit">Login</button>
        </div>
        </form>
    </div>        
    </div>
</body>
</html>