<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponso'Ligue</title>
    <link rel="stylesheet" href="../../style/main.css">
</head>
<body>
    <div class="flex-title"> <h1>Connection</h1> </div>
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