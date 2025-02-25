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
<div class="flex-title"> Inscription </div>
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
    <div class="login-box">
        <form action="register_process.php" method="post">
        <div class="textbox">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="textbox">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="textbox">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="textbox">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="textbox">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="button">
            <button type="submit">Register</button>
        </div>
        </form>
    </div>
    </div>
</body>
</html>