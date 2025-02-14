<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponso'Ligue</title>
    <link rel="stylesheet" href="../../style/main.css">
</head>
<body>
    <div class="flex-title"> <h1>Déconnection</h1> </div>
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
    <form action="deconnexion.php" method="post">
        <p>Êtes-vous sûr de vouloir vous déconnecter ?</p>
        <button type="submit" name="confirm" value="yes">Oui</button>
        <button type="submit" name="confirm" value="no">Non</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
        // Logic to handle user logout
        session_start();
        session_unset();
        session_destroy();
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