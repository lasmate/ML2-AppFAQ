<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Réponso'Ligue</title>
</head>
<body>
    <div class="flex-title"> <h1>Accueil</h1> </div>
    <div class="flex-container">
        <p class='flex-nav' style="text-align: center">nom prenom</p>
    <div class="flex-nav"> <a href="../index.php">Acceuil</a></div>
    <div class="flex-nav" id="FAQ"><p> FAQ </p>
            <div class="flex-nav-Column"> <a href="FAQ/FAQBask.php">Basket</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQFoot.php">Football</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQHand.php">Handball</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQVolle.php">Volley</a></div>
    </div>
    <div class="flex-nav" id="Account"><p> Compte </p> 
            <div class="flex-nav-Column"> <a href="Account/inscription.php">Inscription</a></div>
            <div class="flex-nav-Column"> <a href="Account/connexion.php">Connexion</a></div>
            <div class="flex-nav-Column"> <a href="Account/deconnexion.php">Deconnexion</a></div>
    </div>
</div>
    <div class="flex-page">
        <table>
            <tr>
                <td><a href="FAQ/FAQBask.php"><img src="images/basket.jpg" alt="Basket"></a></td>
                <td><a href="FAQ/FAQFoot.php"><img src="images/foot.jpg" alt="Football"></a></td>
            </tr>
            <tr>
                <td><a href="FAQ/FAQHand.php"><img src="images/hand.jpg" alt="Handball"></a></td>
                <td><a href="FAQ/FAQVolle.php"><img src="images/volley.jpg" alt="Volley"></a></td>
            </tr>
        </table>
    </div>
<?php include 'FAQ/components/footer.php';?>
</body>
</html>