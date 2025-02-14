<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Réponso'Ligue</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15vh;
        }
        table td {
            border: 0;
            padding: 10px;
            text-align: center;
        }
        table img {
            width: 25vw;
        }
    </style>
</head>
<body>
    <div class="flex-title"> <h1>Accueil</h1> </div>
    <div class="flex-container">
        <p class='flex-nav' style="text-align: center">nom prenom</p>
    <div class="flex-nav"> <a href="index.php">Acceuil</a></div>
    <div class="flex-nav" id="FAQ"><p> FAQ </p>
            <div class="flex-nav-Column"> <a href="FAQ/FAQBask.php">Basket</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQFoot.php">Football</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQHand.php">Handball</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQVolle.php">Volley</a></div>
    </div>
    <div class="flex-nav" id="Account"><p> Compte </p> 
            <div class="flex-nav-Column"> <a href="FAQ/Account/inscription.php">Inscription</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/Account/connexion.php">Connexion</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/Account/deconnexion.php">Deconnexion</a></div>
    </div>
</div>
    <div class="flex-page">
        <table>
            <tr>
                <td><a href="FAQ/FAQBask.php"><img src="media/basket.jpeg" alt="Basket"></a></td>
                <td><a href="FAQ/FAQFoot.php"><img src="media/foot.jpeg" alt="Football"></a></td>
            </tr>
            <tr>
                <td><a href="FAQ/FAQHand.php"><img src="media/hand.jpg" alt="Handball"></a></td>
                <td><a href="FAQ/FAQVolle.php"><img src="media/volley.jpg" alt="Volley"></a></td>
            </tr>
        </table>
    </div>
<?php include 'FAQ/components/footer.php';?>
</body>
</html>