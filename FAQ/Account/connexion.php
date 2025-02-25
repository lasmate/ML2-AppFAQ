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
    <div class="flex-title"> Connection </div>
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
    <style>
        .login-box {
        max-width: 40vw;
        padding: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        }
        .textbox {
        margin-bottom: 20px;
        }
        .textbox label {
        display: block;
        margin-bottom: 5px;
        }
        .textbox input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        }
        .checkbox {
        margin-bottom: 20px;
        }
        .button {
        text-align: center;
        }
        .button button {
        padding: 10px 20px;
        background: #333;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        }
        .button button:hover {
        background: #555;
        }
    </style>






        
    </div>
        







</body>
</html>