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
    <div class="flex-landing">
        <div class="flex-grid">
            <div class="flex-item" style="background-image: url('media/basket.jpeg');" onclick="location.href='FAQ/FAQBask.php'"></div>
            <div class="flex-item" style="background-image: url('media/foot.jpeg');" onclick="location.href='FAQ/FAQFoot.php'"></div>
            <div class="flex-item" style="background-image: url('media/hand.jpg');" onclick="location.href='FAQ/FAQHand.php'"></div>
            <div class="flex-item" style="background-image: url('media/volley.jpg');" onclick="location.href='FAQ/FAQVolle.php'"></div>
            </div>
        </div>

        <style>
            .flex-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center;
                margin-top: 15vh;
            }
            .flex-item {
                background-size: cover;
                width: calc(50% - 10px);
                height: 20vh;
                cursor: pointer;
            }
        </style>
    </div>
<?php include 'FAQ/components/footer.php';?>
</body>
</html>