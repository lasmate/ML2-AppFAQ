<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponso'Ligue</title>
    <link rel="stylesheet" href="../../style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="../../style/account.csss">
</head>
<body>
    <div class="flex-title"> <h1>Inscription</h1> </div>
    <div class="flex-container">

        <div class="flex-nav"> <a href="../../index.php">Acceuil</a></div>
        <div class="flex-nav" id="FAQ"><p> FAQ </p>
                <div class="flex-nav-Column"> <a href="../FAQBask.php">Basket</a></div>
                <div class="flex-nav-Column"> <a href="../FAQFoot.php">Football</a></div>
                <div class="flex-nav-Column"> <a href="../FAQHand.php">Handball</a></div>
                <div class="flex-nav-Column"> <a href="../FAQVolle.php">Volley</a></div>
        </div>
        <div class="flex-nav" id="Account"><p> Compte </p> 
                <div class="flex-nav-Column"> <a href="inscription.php">Inscription</a></div>
                <div class="flex-nav-Column"> <a href="connexion.php">Connexion</a></div>
                <div class="flex-nav-Column"> <a href="deconnexion.php">Deconnexion</a></div>
        </div>
    </div>
    <div class="flex-page">
    <div class="login-box">
        <form action="register_process.php" method="post"></form>
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
    <style>
        
    </style>








        
    </div>
        







</body>
</html>